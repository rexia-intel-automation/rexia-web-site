<?php
/* blog.php — Blog RexIA lendo posts de assets/data/posts.json */
$page_title = 'Blog';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/header.php';

function load_posts_from_json() {
  $file = __DIR__ . '/assets/data/posts.json';

  if (!file_exists($file)) {
    return [];
  }

  $json = file_get_contents($file);
  if ($json === false) {
    return [];
  }

  $data = json_decode($json, true);
  if (!is_array($data)) {
    return [];
  }

  $posts = [];
  foreach ($data as $post) {
    if (!isset($post['slug'])) {
      continue;
    }
    $posts[$post['slug']] = $post;
  }

  return $posts;
}

function format_date_br($dateStr) {
  try {
    $dt = new DateTime($dateStr);
    return $dt->format('d/m/Y');
  } catch (Exception $e) {
    return $dateStr;
  }
}

$allPosts = load_posts_from_json();

// Ordena por data desc na listagem
$postsList = array_values($allPosts);
usort($postsList, function($a, $b) {
  $da = $a['date'] ?? '';
  $db = $b['date'] ?? '';
  return strcmp($db, $da); // desc
});

// Sanitizar o slug para prevenir path traversal e injeção
$slug = isset($_GET['slug']) ? preg_replace('/[^a-z0-9\-_]/i', '', trim($_GET['slug'])) : null;
$currentPost = $slug && isset($allPosts[$slug]) ? $allPosts[$slug] : null;
?>

<main class="blog-page">
  <?php if ($currentPost): ?>
    <!-- PÁGINA DE POST ÚNICO -->
    <section class="section" id="blog-post">
      <div class="container">
        <a href="/blog" class="back-link">← Voltar para o blog</a>

        <article class="post-single">
          <div class="post-header">
            <h1 class="post-title">
              <?php echo htmlspecialchars($currentPost['title'] ?? ''); ?>
            </h1>

            <p class="post-meta">
              <?php echo format_date_br($currentPost['date'] ?? ''); ?>
              <?php if (!empty($currentPost['readTime'])): ?>
                · <?php echo htmlspecialchars($currentPost['readTime']); ?>
              <?php endif; ?>
              <?php if (!empty($currentPost['tags']) && is_array($currentPost['tags'])): ?>
                · <?php echo htmlspecialchars(implode(' • ', $currentPost['tags'])); ?>
              <?php endif; ?>
            </p>
          </div>

          <div class="post-content">
            <?php
              if (!empty($currentPost['contentHtml'])) {
                // Conteúdo já em HTML vindo do JSON (gerado pelo n8n)
                echo $currentPost['contentHtml'];
              } elseif (!empty($currentPost['content'])) {
                // Fallback: texto simples
                echo '<p>' . nl2br(htmlspecialchars($currentPost['content'])) . '</p>';
              } else {
                echo '<p>Este artigo ainda não possui conteúdo.</p>';
              }
            ?>
          </div>
        </article>
      </div>
    </section>

  <?php else: ?>
    <!-- LISTAGEM DE POSTS ESTILO "TEXTO + THUMB" -->
    <section class="section" id="blog">
      <div class="container blog-list-header">
        <h1 class="section-title">Blog RexIA</h1>
        <p class="section-subtitle">
          Conteúdo direto ao ponto sobre automação, IA aplicada e operação enxuta.
        </p>
      </div>

      <div class="container blog-list">
        <?php if (empty($postsList)): ?>
          <p style="margin-top:2rem;">
            Ainda não há artigos publicados. Assim que o primeiro JSON entrar em
            <code>assets/data/posts.json</code>, eles aparecem aqui.
          </p>
        <?php else: ?>
          <?php foreach ($postsList as $post): ?>
            <?php
              $slug    = $post['slug'];
              $title   = $post['title'] ?? '';
              $excerpt = $post['excerpt'] ?? '';
              $date    = $post['date'] ?? '';
              $read    = $post['readTime'] ?? '';
              $tags    = (!empty($post['tags']) && is_array($post['tags'])) ? $post['tags'] : [];
              $image   = !empty($post['imageUrl'])
                ? $post['imageUrl']
                : '/assets/img/placeholder.svg';
            ?>
            <article class="blog-row">
              <div class="blog-row-content">
                <?php if (!empty($tags)): ?>
                  <div class="blog-row-tags">
                    <?php foreach ($tags as $tag): ?>
                      <span class="blog-tag"><?php echo htmlspecialchars($tag); ?></span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>

                <h2 class="blog-row-title">
                  <a href="/blog?slug=<?php echo urlencode($slug); ?>">
                    <?php echo htmlspecialchars($title); ?>
                  </a>
                </h2>

                <?php if ($excerpt): ?>
                  <p class="blog-row-excerpt">
                    <?php echo htmlspecialchars($excerpt); ?>
                  </p>
                <?php endif; ?>

                <div class="blog-row-meta">
                  <span><?php echo format_date_br($date); ?></span>
                  <?php if ($read): ?>
                    <span>• <?php echo htmlspecialchars($read); ?></span>
                  <?php endif; ?>
                </div>

                <a class="blog-row-link" href="/blog?slug=<?php echo urlencode($slug); ?>">
                  Ler artigo →
                </a>
              </div>

              <div class="blog-row-thumb">
                <div class="blog-row-thumb-inner">
                  <img src="<?php echo htmlspecialchars($image); ?>" alt="" loading="lazy">
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </section>
  <?php endif; ?>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>