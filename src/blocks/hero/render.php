<?php
$title           = $attributes['title']           ?? 'Your Headline Here';
$title_span      = $attributes['titleSpan']       ?? 'Highlighted Word';
$subtitle        = $attributes['subtitle']        ?? 'Your subtitle here';
$description     = $attributes['description']     ?? 'A brief description of what you do and who you serve.';
$cta_text        = $attributes['ctaText']         ?? 'Get in Touch';
$cta_url         = $attributes['ctaUrl']          ?? '/contact';
$bg_image_id     = $attributes['backgroundImage'] ?? 0;
$overlay_opacity = $attributes['overlayOpacity']  ?? 50;
$bg_image_url    = $bg_image_id
  ? wp_get_attachment_image_url($bg_image_id, 'full')
  : '';
$overlay_style   = 'opacity: ' . ($overlay_opacity / 100) . ';';
?>

<section
  id="hero"
  class="relative min-h-screen flex items-center justify-center overflow-hidden bg-background"
  <?php if ($bg_image_url) : ?>
    style="background-image: url('<?php echo esc_url($bg_image_url); ?>'); background-size: cover; background-position: center;"
  <?php endif; ?>
>

  <?php if ($bg_image_url) : ?>
    <!-- Dark overlay -->
    <div
      class="absolute inset-0 bg-black z-10"
      style="<?php echo esc_attr($overlay_style); ?>">
    </div>
  <?php else : ?>
    <!-- Blobs — only show when no bg image -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
      <div
        class="absolute top-20 left-10 w-96 h-96 bg-purple-400 rounded-full mix-blend-multiply blur-3xl opacity-40"
        data-gsap="blob"
        data-duration="20"
        data-scale="1.2"
        data-x="50"
        data-y="30">
      </div>
      <div
        class="absolute top-40 right-10 w-96 h-96 bg-pink-400 rounded-full mix-blend-multiply blur-3xl opacity-40"
        data-gsap="blob"
        data-duration="25"
        data-scale="1.3"
        data-x="-50"
        data-y="50"
        data-delay="2">
      </div>
      <div
        class="absolute bottom-20 left-1/2 w-96 h-96 bg-orange-400 rounded-full mix-blend-multiply blur-3xl opacity-40"
        data-gsap="blob"
        data-duration="22"
        data-scale="1.4"
        data-x="30"
        data-y="-40"
        data-delay="4">
      </div>
    </div>
  <?php endif; ?>

  <!-- Content -->
  <div class="relative z-20 text-center px-4 max-w-4xl mx-auto">
    <p
      class="text-sm uppercase tracking-wider font-semibold mb-4 <?php echo $bg_image_url ? 'text-white/70' : 'text-muted-foreground'; ?>"
      data-gsap="fade-up"
      data-delay="0.1">
      <?php echo esc_html($subtitle); ?>
    </p>
    <h1
      class="text-5xl md:text-7xl font-bold mb-6 leading-tight <?php echo $bg_image_url ? 'text-white' : 'text-foreground'; ?>"
      data-gsap="fade-up"
      data-delay="0.3">
      <?php echo esc_html($title); ?>
      <span class="text-primary"> <?php echo esc_html($title_span); ?></span>
    </h1>
    <p
      class="text-lg mb-10 max-w-2xl mx-auto <?php echo $bg_image_url ? 'text-white/70' : 'text-muted-foreground'; ?>"
      data-gsap="fade-up"
      data-delay="0.5">
      <?php echo esc_html($description); ?>
    </p>
    <a
      href="<?php echo esc_url($cta_url); ?>"
      class="inline-flex items-center gap-2 bg-primary text-primary-foreground px-8 py-4 rounded-full font-semibold text-lg"
      data-gsap="fade-up hover-lift"
      data-delay="0.7">
      <?php echo esc_html($cta_text); ?>
    </a>
  </div>
  

</section>