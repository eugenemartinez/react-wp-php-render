<?php
$site_name = get_bloginfo('name') ?: 'Your Brand';
$tagline   = get_bloginfo('description') ?: 'Building digital experiences that matter.';
$email     = get_option('admin_email');
$logo      = get_template_directory_uri() . '/assets/logo.png';
$links     = [
  ['text' => 'About',    'url' => home_url('/about')],
  ['text' => 'Services', 'url' => home_url('/services')],
  ['text' => 'Work',     'url' => home_url('/work')],
  ['text' => 'Contact',  'url' => home_url('/contact')],
];
?>

<footer id="main-footer" class="bg-foreground text-background py-16">
  <div class="max-w-6xl mx-auto px-4">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">

      <!-- Brand -->
      <div data-gsap="fade-up" data-scroll="true">
        <?php if (file_exists(get_template_directory() . '/assets/logo.png')) : ?>
          <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr($site_name); ?>" class="h-8 w-auto mb-4 brightness-0 invert" />
        <?php else : ?>
          <span class="text-2xl font-bold mb-4 block"><?php echo esc_html($site_name); ?></span>
        <?php endif; ?>
        <p class="text-background/60 leading-relaxed"><?php echo esc_html($tagline); ?></p>
      </div>

      <!-- Links -->
      <div data-gsap="fade-up" data-scroll="true" data-delay="0.1">
        <h4 class="font-semibold mb-4 text-background">Navigation</h4>
        <ul class="space-y-3">
          <?php foreach ($links as $link) : ?>
            <li>
              <a href="<?php echo esc_url($link['url']); ?>" class="text-background/60 hover:text-background transition-colors">
                <?php echo esc_html($link['text']); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Contact -->
      <div data-gsap="fade-up" data-scroll="true" data-delay="0.2">
        <h4 class="font-semibold mb-4 text-background">Get in Touch</h4>
        <a href="mailto:<?php echo esc_attr($email); ?>" class="text-background/60 hover:text-background transition-colors block">
          <?php echo esc_html($email); ?>
        </a>
      </div>

    </div>

    <!-- Bottom bar -->
    <div class="border-t border-background/10 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
      <p class="text-background/40 text-sm">
        © <?php echo date('Y'); ?> <?php echo esc_html($site_name); ?>. All rights reserved.
      </p>
    </div>

  </div>
</footer>