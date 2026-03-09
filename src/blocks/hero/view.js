import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { initGsapMotion } from '../../js/gsap-motion.js';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
  initGsapMotion();

  // ── Custom animations below ───────────────────────────────
  // Use this space for complex sequences, timelines, or
  // animations targeting specific IDs not covered by gsap-motion
  //
  // Example:
  // const tl = gsap.timeline({ delay: 1 });
  // tl.to('#hero-line', { width: '100%', duration: 0.8 })
  //   .to('#hero-reveal', { opacity: 1, duration: 0.4 });
});