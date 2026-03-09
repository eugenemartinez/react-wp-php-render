<?php
$site_name = get_bloginfo('name') ?: 'Your Brand';
$logo      = get_template_directory_uri() . '/assets/logo.png';
$links     = [
  ['text' => 'About',    'url' => home_url('/about')],
  ['text' => 'Services', 'url' => home_url('/services')],
  ['text' => 'Work',     'url' => home_url('/work')],
];
$cta_text  = 'Get in Touch';
$cta_url   = home_url('/contact');
?>

<nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-md border-b border-border">
  <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">

    <!-- Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
      <?php if (file_exists(get_template_directory() . '/assets/logo.png')) : ?>
        <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr($site_name); ?>" class="h-8 w-auto" />
      <?php else : ?>
        <span class="text-xl font-bold text-foreground"><?php echo esc_html($site_name); ?></span>
      <?php endif; ?>
    </a>

    <!-- Desktop Links -->
    <div class="hidden md:flex items-center gap-8">
      <?php foreach ($links as $link) : ?>
        <a
          href="<?php echo esc_url($link['url']); ?>"
          class="text-muted-foreground hover:text-foreground transition-colors font-medium"
          data-gsap="hover-dim">
          <?php echo esc_html($link['text']); ?>
        </a>
      <?php endforeach; ?>
    </div>

    <!-- CTA + Mobile btn -->
    <div class="flex items-center gap-4">
      <a
        href="<?php echo esc_url($cta_url); ?>"
        class="hidden md:inline-flex bg-primary text-primary-foreground px-6 py-2 rounded-full font-semibold text-sm"
        data-gsap="hover-lift">
        <?php echo esc_html($cta_text); ?>
      </a>
      <button id="mobile-menu-btn" class="md:hidden text-foreground p-2" aria-label="Toggle menu">
        <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-background border-t border-border px-4 py-6 flex flex-col gap-4">
    <?php foreach ($links as $link) : ?>
      <a href="<?php echo esc_url($link['url']); ?>" class="text-foreground font-medium py-2">
        <?php echo esc_html($link['text']); ?>
      </a>
    <?php endforeach; ?>
    <a href="<?php echo esc_url($cta_url); ?>" class="bg-primary text-primary-foreground px-6 py-3 rounded-full font-semibold text-center">
      <?php echo esc_html($cta_text); ?>
    </a>
  </div>
</nav>

<div class="h-16"></div>