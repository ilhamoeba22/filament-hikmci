/**
 * PT BPRS HIK MCI - 3D Interactive WebGL Hero Showcase
 * Powered by Three.js (r128)
 * Featuring Holographic Digital Network Globe, Khatam 8-Point Star,
 * Tabungan Syariah Digital Card, Glowing Torus HUD Rings,
 * Orbiting 3D Gold Dinar Coins with Akad Labels (Wadiah, Mudharabah, etc.),
 * Neon Mosque Silhouette & Grid Floor, Ascending Data Particles & Orbital Gold Dust.
 * Equipped with Smooth Pointer Parallax, Scroll-Driven Rotation, and IntersectionObserver (0% GPU when hidden).
 */
(function() {
  'use strict';

  function isWebGLAvailable() {
    try {
      const canvas = document.createElement('canvas');
      return !!(window.WebGLRenderingContext && (canvas.getContext('webgl') || canvas.getContext('experimental-webgl')));
    } catch (e) {
      return false;
    }
  }

  function initHero3D() {
    const el = document.getElementById('stage');
    const LB = document.getElementById('labels');

    if (!el || !LB || !isWebGLAvailable() || typeof THREE === 'undefined') {
      return;
    }

    const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
    const ADD = THREE.AdditiveBlending;
    const PI = Math.PI;

    // 1. Renderer Setup
    const R = new THREE.WebGLRenderer({ antialias: true, alpha: true, powerPreference: 'high-performance' });
    R.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
    
    // Clear any previous canvas if re-initializing
    el.innerHTML = '';
    el.appendChild(R.domElement);

    // 2. Scene, Camera, Fog, Lights
    const S = new THREE.Scene();
    const C = new THREE.PerspectiveCamera(40, 1, 0.1, 100);
    C.position.set(0, 0.4, 11);
    C.lookAt(0, 0, 0);

    S.fog = new THREE.Fog(0x01100c, 20, 42);
    S.add(new THREE.AmbientLight(0xfff2d0, 0.85));

    const kl = new THREE.DirectionalLight(0xffffff, 1.5);
    kl.position.set(4, 6, 8);
    S.add(kl);

    const p1 = new THREE.PointLight(0x19f0b0, 3, 30);
    p1.position.set(-6, -2, 4);
    S.add(p1);

    const p2 = new THREE.PointLight(0xffc857, 3, 30);
    p2.position.set(6, 3, 5);
    S.add(p2);

    // 3. World Group (Centered inside container for col-lg-5 layout)
    const world = new THREE.Group();
    world.position.set(0, 0, 0);
    S.add(world);

    const lineM = (c, o) => new THREE.LineBasicMaterial({ color: c, transparent: true, opacity: o, blending: ADD });

    function gtex(c) {
      const v = document.createElement('canvas');
      v.width = v.height = 128;
      const x = v.getContext('2d');
      const g = x.createRadialGradient(64, 64, 0, 64, 64, 64);
      g.addColorStop(0, c);
      g.addColorStop(1, 'rgba(0,0,0,0)');
      x.fillStyle = g;
      x.fillRect(0, 0, 128, 128);
      return new THREE.CanvasTexture(v);
    }

    const gE = gtex('rgba(25,240,176,1)');
    const gG = gtex('rgba(255,210,122,1)');

    function glow(t, s, x, y, z, o) {
      const m = new THREE.Sprite(new THREE.SpriteMaterial({ map: t, blending: ADD, transparent: true, depthWrite: false, opacity: o }));
      m.scale.set(s, s, 1);
      m.position.set(x, y, z);
      return m;
    }

    function star(r, n, q) {
      const s = new THREE.Shape();
      for (let i = 0; i < n * 2; i++) {
        const a = (i * PI) / n;
        const rr = i % 2 ? r * q : r;
        const x = Math.cos(a) * rr;
        const y = Math.sin(a) * rr;
        if (i) s.lineTo(x, y);
        else s.moveTo(x, y);
      }
      s.closePath();
      return s;
    }

    function sq(a) {
      const s = new THREE.Shape();
      s.moveTo(-a, -a);
      s.lineTo(a, -a);
      s.lineTo(a, a);
      s.lineTo(-a, a);
      s.closePath();
      return s;
    }

    function outline(sh, c, o) {
      const g = new THREE.ExtrudeGeometry(sh, { depth: 0.12, bevelEnabled: false });
      g.translate(0, 0, -0.06);
      return new THREE.LineSegments(new THREE.EdgesGeometry(g), lineM(c, o));
    }

    // Glow latar belakang
    world.add(glow(gE, 12, 0, 0.3, -2, 0.5), glow(gG, 7, 2.5, 2.5, -3, 0.25));

    // Globe jaringan digital holografik
    const globe = new THREE.Group();
    world.add(globe);
    const ico = new THREE.IcosahedronGeometry(2.7, 2);
    globe.add(new THREE.LineSegments(new THREE.WireframeGeometry(ico), lineM(0x19f0b0, 0.22)));
    globe.add(new THREE.Points(ico, new THREE.PointsMaterial({ color: 0x8dffe6, size: 0.16, map: gE, transparent: true, depthWrite: false, blending: ADD })));
    globe.position.set(0, 0.3, -1);

    // Bintang Khatam holografik (8-point Islamic star)
    const starG = new THREE.Group();
    starG.position.set(0, 0.3, -0.4);
    world.add(starG);
    const sqA = outline(sq(2.3), 0xffd27a, 0.9);
    const sqB = outline(sq(2.3), 0xffd27a, 0.9);
    sqB.rotation.z = PI / 4;
    starG.add(sqA, sqB);
    const inner = outline(star(1.75, 8, 0.765), 0x19f0b0, 0.8);
    inner.position.set(0, 0.3, -0.5);
    world.add(inner);

    // Kartu Tabungan Syariah BPRS HIK MCI (Canvas Texture)
    function drawCard() {
      const W = 1024, H = 640;
      const v = document.createElement('canvas');
      v.width = W;
      v.height = H;
      const x = v.getContext('2d');
      const rr = (a, b, w, h, r) => {
        x.beginPath();
        x.moveTo(a + r, b);
        x.arcTo(a + w, b, a + w, b + h, r);
        x.arcTo(a + w, b + h, a, b + h, r);
        x.arcTo(a, b + h, a, b, r);
        x.arcTo(a, b, a + w, b, r);
        x.closePath();
      };

      rr(0, 0, W, H, 50);
      x.clip();

      let g = x.createLinearGradient(0, 0, W, H);
      g.addColorStop(0, '#10684d');
      g.addColorStop(0.55, '#062b21');
      g.addColorStop(1, '#02130f');
      x.fillStyle = g;
      x.fillRect(0, 0, W, H);

      // Islamic Geometric Pattern Overlay
      x.strokeStyle = 'rgba(255, 210, 122, 0.14)';
      x.lineWidth = 2;
      for (let i = 0; i < 8; i++) {
        for (let j = 0; j < 6; j++) {
          x.save();
          x.translate(i * 150 + (j % 2) * 75 - 30, j * 130 - 20);
          x.strokeRect(-44, -44, 88, 88);
          x.rotate(PI / 4);
          x.strokeRect(-44, -44, 88, 88);
          x.restore();
        }
      }

      // Card Holographic Sheen
      g = x.createLinearGradient(0, 0, W, 0);
      g.addColorStop(0, 'rgba(255,255,255,0)');
      g.addColorStop(0.5, 'rgba(255,255,255,0.1)');
      g.addColorStop(1, 'rgba(255,255,255,0)');
      x.fillStyle = g;
      x.save();
      x.rotate(-0.5);
      x.fillRect(200, -200, 200, 1400);
      x.restore();

      // Gold EMV Chip
      g = x.createLinearGradient(0, 0, W, H);
      g.addColorStop(0, '#ffe9a8');
      g.addColorStop(1, '#c88a22');
      rr(70, 205, 120, 92, 14);
      x.fillStyle = g;
      x.fill();
      x.strokeStyle = 'rgba(60,40,0,0.5)';
      x.lineWidth = 3;
      x.beginPath();
      x.moveTo(70, 251);
      x.lineTo(190, 251);
      x.moveTo(130, 205);
      x.lineTo(130, 297);
      x.stroke();

      // Card Typography & Identity
      x.fillStyle = '#ffffff';
      x.font = '800 58px "Plus Jakarta Sans", "Outfit", system-ui, sans-serif';
      x.fillText('BPRS HIK MCI', 70, 118);

      x.fillStyle = '#ffd27a';
      x.font = '600 25px "Plus Jakarta Sans", "Outfit", system-ui, sans-serif';
      x.fillText('TABUNGAN SYARIAH · BEBAS RIBA', 70, 162);

      x.fillStyle = '#eafff7';
      x.font = '600 50px monospace';
      x.fillText('••••  ••••  ••••  2026', 70, 430);

      x.fillStyle = '#19f0b0';
      x.font = '600 27px "Plus Jakarta Sans", "Outfit", system-ui, sans-serif';
      x.fillText('AKAD WADIAH · MUDHARABAH', 70, 560);

      // Contactless Wifi Symbol
      x.strokeStyle = '#ffd27a';
      x.lineWidth = 5;
      for (let i = 1; i < 4; i++) {
        x.beginPath();
        x.arc(860, 150, i * 20, -0.9, 0.9);
        x.stroke();
      }

      // Islamic 8-point Khatam Star Emblem
      x.lineWidth = 4;
      x.beginPath();
      const st = star(96, 8, 0.765).getPoints();
      st.forEach((p, i) => (i ? x.lineTo(830 + p.x + 30, 490 - p.y) : x.moveTo(860 + p.x, 490 - p.y)));
      x.closePath();
      x.stroke();

      // Outer Golden Border
      x.strokeStyle = 'rgba(255, 210, 122, 0.8)';
      x.lineWidth = 7;
      rr(5, 5, W - 10, H - 10, 46);
      x.stroke();

      return v;
    }

    const cv = drawCard();
    const cT = new THREE.CanvasTexture(cv);
    const card = new THREE.Mesh(
      new THREE.PlaneGeometry(3.7, 2.31),
      new THREE.MeshBasicMaterial({ map: cT, transparent: true, side: THREE.DoubleSide })
    );
    card.position.set(0, 0.3, 1.4);
    world.add(card);
    card.add(glow(gE, 6, 0, 0, -0.3, 0.35));

    // Re-render card when web fonts are loaded
    if (document.fonts && document.fonts.ready) {
      document.fonts.ready.then(() => {
        const c = drawCard();
        cT.image = c;
        cT.needsUpdate = true;
      });
    }

    // Concentric glowing HUD Rings
    const rg = new THREE.Group();
    rg.position.set(0, 0.3, -0.2);
    world.add(rg);

    function ring(r, c, o, tx, tz) {
      const m = new THREE.Mesh(
        new THREE.TorusGeometry(r, 0.012, 8, 220),
        new THREE.MeshBasicMaterial({ color: c, transparent: true, opacity: o, blending: ADD })
      );
      m.rotation.set(tx, 0, tz);
      rg.add(m);
      return m;
    }

    const r1 = ring(3.2, 0x19f0b0, 0.7, 1.2, 0);
    const r2 = ring(3.6, 0xffd27a, 0.6, -1.1, 0.4);
    const r3 = ring(4.0, 0x4de3ff, 0.35, 0.3, 0.2);

    const dp = new Float32Array(180 * 3);
    for (let i = 0; i < 180; i++) {
      const a = (i / 180) * PI * 2;
      dp.set([Math.cos(a) * 3.6, Math.sin(a) * 3.6, 0], i * 3);
    }
    const dg = new THREE.BufferGeometry();
    dg.setAttribute('position', new THREE.BufferAttribute(dp, 3));
    r3.add(new THREE.Points(dg, new THREE.PointsMaterial({ color: 0x9fffe8, size: 0.07, map: gE, transparent: true, depthWrite: false, blending: ADD })));

    // Orbiting 3D Gold Dinar Coins + Floating Akad Labels
    const orbit = new THREE.Group();
    orbit.position.set(0, 0.3, 0);
    orbit.rotation.set(0.5, 0, 0.15);
    world.add(orbit);

    const gold = new THREE.MeshStandardMaterial({
      color: 0xffd27a,
      metalness: 0.7,
      roughness: 0.28,
      emissive: 0x6a4500,
      emissiveIntensity: 0.6
    });
    const emer = new THREE.MeshBasicMaterial({ color: 0x19f0b0 });
    const cream = new THREE.MeshStandardMaterial({
      color: 0xfff2c2,
      emissive: 0x7a6a20,
      emissiveIntensity: 0.6
    });

    const disc = new THREE.CylinderGeometry(0.42, 0.42, 0.09, 48);
    const rim = new THREE.TorusGeometry(0.42, 0.045, 12, 48);
    const mk = new THREE.ShapeGeometry(star(0.26, 8, 0.765));

    const names = ['Wadiah', 'Mudharabah', 'Murabahah', 'Musyarakah', 'Ijarah', 'Qardh'];
    const coins = [];

    // Clear existing labels in container
    LB.innerHTML = '';

    names.forEach((n, i) => {
      const g = new THREE.Group();
      const c = new THREE.Group();
      const d = new THREE.Mesh(disc, gold);
      d.rotation.x = PI / 2;

      const m1 = new THREE.Mesh(mk, emer);
      m1.position.z = 0.06;
      const m2 = m1.clone();
      m2.position.z = -0.06;
      m2.rotation.y = PI;

      c.add(d, new THREE.Mesh(rim, cream), m1, m2, glow(gG, 1.6, 0, 0, 0, 0.5));
      g.add(c);
      orbit.add(g);

      const L = document.createElement('div');
      L.className = 'lab';
      L.innerHTML = '<i></i><span>' + n + '</span>';
      LB.appendChild(L);
      coins.push({ g, c, L, i });
    });

    // Neon Mosque Silhouette + Perspective Floor Grid
    const city = new THREE.Group();
    city.position.set(0, -2.9, -2.5);
    city.scale.setScalar(0.95);
    world.add(city);

    const fill = new THREE.MeshBasicMaterial({ color: 0x02201a });
    function neon(geo, x, y, c, wire) {
      const g = new THREE.Group();
      g.add(
        new THREE.Mesh(geo, fill),
        new THREE.LineSegments(
          wire ? new THREE.WireframeGeometry(geo) : new THREE.EdgesGeometry(geo, 20),
          lineM(c, 0.95)
        )
      );
      g.position.set(x, y, 0);
      city.add(g);
    }

    neon(new THREE.BoxGeometry(5.2, 0.9, 1.4), 0, -0.45, 0x19f0b0);
    neon(new THREE.SphereGeometry(1.3, 24, 12, 0, PI * 2, 0, PI / 2), 0, 0, 0xffd27a, true);
    neon(new THREE.CylinderGeometry(0.05, 0.05, 0.6, 6), 0, 1.55, 0xffd27a);
    [-1, 1].forEach(s => {
      neon(new THREE.CylinderGeometry(0.14, 0.19, 4, 12), s * 2.9, 1.1, 0x19f0b0);
      neon(new THREE.CylinderGeometry(0.3, 0.3, 0.14, 16), s * 2.9, 2.6, 0xffd27a);
      neon(new THREE.ConeGeometry(0.22, 0.7, 12), s * 2.9, 3.35, 0xffd27a);
      neon(new THREE.SphereGeometry(0.65, 16, 8, 0, PI * 2, 0, PI / 2), s * 1.85, 0, 0x4de3ff, true);
    });

    const grid = new THREE.GridHelper(44, 44, 0x19f0b0, 0x0b6b52);
    grid.position.y = -3.8;
    grid.material.transparent = true;
    grid.material.opacity = 0.35;
    grid.material.blending = ADD;
    S.add(grid);

    // Ascending Data Particles & Orbital Gold Dust Cloud
    const N = 420;
    const rp = new Float32Array(N * 3);
    const sp = new Float32Array(N);
    for (let i = 0; i < N; i++) {
      rp.set([(Math.random() - 0.5) * 30, -3.8 + Math.random() * 13, -9 + Math.random() * 12], i * 3);
      sp[i] = 0.01 + Math.random() * 0.03;
    }
    const rgm = new THREE.BufferGeometry();
    rgm.setAttribute('position', new THREE.BufferAttribute(rp, 3));
    S.add(new THREE.Points(rgm, new THREE.PointsMaterial({ color: 0x19f0b0, size: 0.1, map: gE, transparent: true, opacity: 0.8, depthWrite: false, blending: ADD })));

    const GN = 260;
    const gp = new Float32Array(GN * 3);
    for (let i = 0; i < GN; i++) {
      const r = 5 + Math.random() * 9;
      const t = Math.random() * 6.283;
      const u = Math.random() * 2 - 1;
      const s = Math.sqrt(1 - u * u);
      gp.set([r * s * Math.cos(t), r * u * 0.6, r * s * Math.sin(t)], i * 3);
    }
    const gg = new THREE.BufferGeometry();
    gg.setAttribute('position', new THREE.BufferAttribute(gp, 3));
    const dust = new THREE.Points(gg, new THREE.PointsMaterial({ color: 0xffd27a, size: 0.12, map: gG, transparent: true, depthWrite: false, blending: ADD }));
    S.add(dust);

    // Responsive Resizing & Positioning (Full-bleed Hero Section)
    let base = 1, W = 1, H = 1;

    function resize() {
      if (!el) return;
      W = el.clientWidth || window.innerWidth;
      H = el.clientHeight || window.innerHeight;
      R.setSize(W, H);
      C.aspect = W / H;
      C.updateProjectionMatrix();

      const wide = W >= 900;
      base = W < 600 ? 0.52 : (wide ? 1.0 : 0.72);
      world.position.set(wide ? 3.0 : 0, wide ? 0 : 2.0, 0);
    }

    window.addEventListener('resize', resize);
    resize();

    // Mouse Pointer Tracking with Smooth Inertia Lerp
    let mx = 0, my = 0, tx = 0, ty = 0;
    window.addEventListener('pointermove', e => {
      tx = (e.clientX / window.innerWidth) * 2 - 1;
      ty = (e.clientY / window.innerHeight) * 2 - 1;
    }, { passive: true });

    // Scroll-Driven Animation
    let scrollY = window.scrollY || 0;
    let targetScrollRot = 0;
    let currentScrollRot = 0;

    window.addEventListener('scroll', () => {
      scrollY = window.scrollY || window.pageYOffset || 0;
      targetScrollRot = scrollY * 0.0024;
    }, { passive: true });

    // Fade-in trigger
    setTimeout(() => el.classList.add('on'), 60);

    const clock = new THREE.Clock();
    const v3 = new THREE.Vector3();
    const ease = x => 1 - Math.pow(1 - x, 3);
    let t = 0;

    // Visibility Management for 0% CPU/GPU overhead when scrolled out of view
    let isVisible = true;
    let rafId = null;

    function frame() {
      if (!isVisible) {
        rafId = null;
        return;
      }
      rafId = requestAnimationFrame(frame);

      t += Math.min(clock.getDelta(), 0.05) * (reduce ? 0.15 : 1);
      mx += (tx - mx) * 0.05;
      my += (ty - my) * 0.05;
      currentScrollRot += (targetScrollRot - currentScrollRot) * 0.06;

      const k = ease(Math.min(t / 2.2, 1));
      world.scale.setScalar(base * (0.7 + 0.3 * k));

      globe.rotation.y = t * 0.12;
      globe.rotation.x = Math.sin(t * 0.2) * 0.15;

      starG.rotation.z = t * 0.12;
      inner.rotation.z = -t * 0.2;

      card.rotation.y = Math.sin(t * 0.6) * 0.22 + mx * 0.35;
      card.rotation.x = -0.06 + Math.sin(t * 0.5) * 0.05 + my * 0.18;
      card.position.y = 0.3 + Math.sin(t * 1.1) * 0.1;
      card.position.z = 1.4 * k;

      r1.rotation.y = t * 0.45;
      r2.rotation.z = 0.4 + t * 0.3;
      r3.rotation.z = 0.2 - t * 0.15;

      // Orbit spins dynamically with time + subtle responsive scroll
      orbit.rotation.y = t * 0.22 + currentScrollRot * 1.5;

      coins.forEach(({ g, c, i }) => {
        const a = (i / 6) * PI * 2;
        g.position.set(Math.cos(a) * 4.3, Math.sin(t * 1.2 + i) * 0.3, Math.sin(a) * 4.3);
        c.rotation.y = t * 1.4 + i;
      });

      grid.position.z = (t * 0.8) % 1;

      // Ascending data streams
      const ra = rgm.attributes.position;
      for (let i = 0; i < N; i++) {
        let y = ra.getY(i) + sp[i];
        if (y > 9.2) y = -3.8;
        ra.setY(i, y);
      }
      ra.needsUpdate = true;

      dust.rotation.y = t * 0.03;

      // World level mouse parallax & scroll rotation
      world.rotation.y += ((mx * 0.25 + currentScrollRot * 0.5) - world.rotation.y) * 0.05;
      world.rotation.x += (my * 0.12 - world.rotation.x) * 0.05;

      p2.position.x = 6 + Math.sin(t) * 2;
      p1.position.y = -2 + Math.cos(t * 0.8) * 2;

      R.render(S, C);

      // Project 3D coin positions onto 2D screen coordinate space for HTML labels
      coins.forEach(({ c, L }) => {
        v3.setFromMatrixPosition(c.matrixWorld);
        const z = v3.z;
        v3.project(C);
        L.style.transform = 'translate(' + ((v3.x * 0.5 + 0.5) * W) + 'px,' + ((-v3.y * 0.5 + 0.5) * H) + 'px) translate(-50%,-190%)';
        L.style.opacity = Math.max(0.2, Math.min(1, 0.55 + z / 7)) * k;
      });
    }

    // IntersectionObserver to pause rendering when hero is off-screen
    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          const wasVisible = isVisible;
          isVisible = entry.isIntersecting;
          if (isVisible && !wasVisible && !rafId) {
            clock.start();
            frame();
          }
        });
      }, { threshold: 0.05 });
      observer.observe(el);
    }

    // Start render loop
    frame();
  }

  // Safe bootstrap
  function bootstrap() {
    if (typeof THREE === 'undefined') {
      setTimeout(bootstrap, 50);
      return;
    }
    initHero3D();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', bootstrap);
  } else {
    bootstrap();
  }
})();
