/**
 * PT BPRS HIK MCI - 3D Interactive WebGL Hero Showcase
 * Powered by Three.js (r128)
 * Featuring Holographic Digital Network Globe, Khatam 8-Point Star,
 * Luxury 3D Buku Tabungan Syariah (Indonesian Sharia Passbook with Paper Thickness),
 * Glowing Torus HUD Rings, Orbiting 3D Gold Dinar Coins with Akad Labels (Wadiah, Mudharabah, etc.),
 * Neon Mosque Silhouette & Grid Floor, Ascending Data Particles & Orbital Gold Dust.
 * Non-blocking background canvas (pointer-events: none), Smooth Pointer Parallax,
 * Scroll-Driven Rotation, and IntersectionObserver (0% GPU when hidden).
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
    if (window.__hero3DInitialized) return;
    window.__hero3DInitialized = true;

    const el = document.getElementById('stage');
    const LB = document.getElementById('labels');

    if (!el || !LB || !isWebGLAvailable() || typeof THREE === 'undefined') {
      return;
    }

    const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
    const ADD = THREE.AdditiveBlending;
    const PI = Math.PI;

    // 1. Renderer Setup (Canvas strictly as non-blocking background)
    const R = new THREE.WebGLRenderer({ antialias: true, alpha: true, powerPreference: 'high-performance' });
    R.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
    R.domElement.style.pointerEvents = 'none';
    
    // Clear any previous canvas if re-initializing
    el.innerHTML = '';
    el.appendChild(R.domElement);

    // 2. Scene, Camera, Fog, Lights
    const S = new THREE.Scene();
    const C = new THREE.PerspectiveCamera(40, 1, 0.1, 100);
    C.position.set(0, 0.4, 11);
    C.lookAt(0, 0, 0);

    S.fog = new THREE.Fog(0x01100c, 20, 42);
    S.add(new THREE.AmbientLight(0xfff2d0, 0.9));

    const kl = new THREE.DirectionalLight(0xffffff, 1.6);
    kl.position.set(4, 6, 8);
    S.add(kl);

    const p1 = new THREE.PointLight(0x19f0b0, 3.2, 30);
    p1.position.set(-6, -2, 4);
    S.add(p1);

    const p2 = new THREE.PointLight(0xffc857, 3.2, 30);
    p2.position.set(6, 3, 5);
    S.add(p2);

    // 3. World Group
    const world = new THREE.Group();
    world.position.set(3.9, 0.2, 0);
    S.add(world);

    // Focal Group: Objek 3D interaktif utama (Buku Tabungan, koin dinar, HUD rings, dll.)
    // Tampil 100% di desktop (>= 992px), dan disembunyikan di mobile (< 992px)
    // agar layar mobile tetap bersih dan tidak menutupi teks headline dan tombol CTA.
    const focalGroup = new THREE.Group();
    world.add(focalGroup);

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
      const g = new THREE.ExtrudeGeometry(sh, { depth: 0.1, bevelEnabled: false });
      g.translate(0, 0, -0.05);
      return new THREE.LineSegments(new THREE.EdgesGeometry(g), lineM(c, o));
    }

    // Glow latar belakang
    world.add(glow(gE, 10, 0, 0.3, -2, 0.45), glow(gG, 6, 2.0, 2.0, -3, 0.22));

    // Globe jaringan digital holografik (radius disesuaikan ke 2.0)
    const globe = new THREE.Group();
    focalGroup.add(globe);
    const ico = new THREE.IcosahedronGeometry(2.0, 2);
    globe.add(new THREE.LineSegments(new THREE.WireframeGeometry(ico), lineM(0x19f0b0, 0.22)));
    globe.add(new THREE.Points(ico, new THREE.PointsMaterial({ color: 0x8dffe6, size: 0.15, map: gE, transparent: true, depthWrite: false, blending: ADD })));
    globe.position.set(0, 0.3, -1);

    // Bintang Khatam holografik (8-point Islamic star, radius disesuaikan ke 1.6 & 1.22)
    const starG = new THREE.Group();
    starG.position.set(0, 0.3, -0.4);
    focalGroup.add(starG);
    const sqA = outline(sq(1.6), 0xffd27a, 0.85);
    const sqB = outline(sq(1.6), 0xffd27a, 0.85);
    sqB.rotation.z = PI / 4;
    starG.add(sqA, sqB);
    const inner = outline(star(1.22, 8, 0.765), 0x19f0b0, 0.8);
    inner.position.set(0, 0.3, -0.5);
    focalGroup.add(inner);

    // ========================================================
    // BUKU TABUNGAN SYARIAH BPRS HIK MCI (CANVAS TEXTURE & 3D)
    // ========================================================

    // Helper: Rounded Rectangle
    function drawRoundRect(ctx, a, b, w, h, r) {
      ctx.beginPath();
      ctx.moveTo(a + r, b);
      ctx.arcTo(a + w, b, a + w, b + h, r);
      ctx.arcTo(a + w, b + h, a, b + h, r);
      ctx.arcTo(a, b + h, a, b, r);
      ctx.arcTo(a, b, a + w, b, r);
      ctx.closePath();
    }

    // Cover Depan Buku Tabungan
    function drawBukuTabunganCover() {
      const W = 1024, H = 680;
      const v = document.createElement('canvas');
      v.width = W;
      v.height = H;
      const x = v.getContext('2d');

      // 1. Dasar Cover Buku Tabungan
      drawRoundRect(x, 0, 0, W, H, 28);
      x.clip();

      // Gradien Emerald Hijau Tua Mewah
      let g = x.createLinearGradient(0, 0, W, H);
      g.addColorStop(0, '#0d553b');
      g.addColorStop(0.35, '#062b21');
      g.addColorStop(0.75, '#042018');
      g.addColorStop(1, '#02130e');
      x.fillStyle = g;
      x.fillRect(0, 0, W, H);

      // Radial sheen lembut
      const radGlow = x.createRadialGradient(W * 0.55, H * 0.45, 30, W * 0.55, H * 0.45, 480);
      radGlow.addColorStop(0, 'rgba(25, 240, 176, 0.14)');
      radGlow.addColorStop(0.55, 'rgba(255, 210, 122, 0.06)');
      radGlow.addColorStop(1, 'rgba(0, 0, 0, 0)');
      x.fillStyle = radGlow;
      x.fillRect(0, 0, W, H);

      // Motif Kisi-Kisi Geometris Islami (Lattice Overlay)
      x.save();
      x.strokeStyle = 'rgba(255, 210, 122, 0.08)';
      x.lineWidth = 1.5;
      for (let i = 0; i < 9; i++) {
        for (let j = 0; j < 6; j++) {
          x.save();
          x.translate(140 + i * 110, j * 125 + 10);
          x.strokeRect(-36, -36, 72, 72);
          x.rotate(PI / 4);
          x.strokeRect(-36, -36, 72, 72);
          x.restore();
        }
      }
      x.restore();

      // 2. Spine / Jilid Lipatan di Sisi Kiri
      const spineW = 95;
      const spineGrad = x.createLinearGradient(0, 0, spineW, 0);
      spineGrad.addColorStop(0, '#02130e');
      spineGrad.addColorStop(0.5, '#06291e');
      spineGrad.addColorStop(0.92, '#041c14');
      spineGrad.addColorStop(1, '#02100b');
      x.fillStyle = spineGrad;
      x.fillRect(0, 0, spineW, H);

      // Lipatan bayangan jilid (crease)
      const creaseGrad = x.createLinearGradient(spineW - 14, 0, spineW + 24, 0);
      creaseGrad.addColorStop(0, 'rgba(0,0,0,0.65)');
      creaseGrad.addColorStop(0.35, 'rgba(0,0,0,0.35)');
      creaseGrad.addColorStop(1, 'rgba(0,0,0,0)');
      x.fillStyle = creaseGrad;
      x.fillRect(spineW - 14, 0, 38, H);

      // Garis Emas Pembatas Jilid
      x.strokeStyle = 'rgba(255, 210, 122, 0.85)';
      x.lineWidth = 3;
      x.beginPath();
      x.moveTo(spineW, 0);
      x.lineTo(spineW, H);
      x.stroke();

      x.strokeStyle = 'rgba(25, 240, 176, 0.5)';
      x.lineWidth = 1.5;
      x.beginPath();
      x.moveTo(spineW - 5, 0);
      x.lineTo(spineW - 5, H);
      x.stroke();

      // Jahitan jilid buku tabungan
      x.fillStyle = '#ffd27a';
      for (let y = 35; y < H - 20; y += 45) {
        x.fillRect(spineW - 16, y, 6, 16);
      }

      // 3. Double Border Emas Mewah pada Halaman Cover
      const bx = spineW + 18, by = 18, bw = W - bx - 18, bh = H - 36;
      x.strokeStyle = 'rgba(255, 210, 122, 0.75)';
      x.lineWidth = 3;
      drawRoundRect(x, bx, by, bw, bh, 18);
      x.stroke();

      x.strokeStyle = 'rgba(255, 210, 122, 0.35)';
      x.lineWidth = 1;
      drawRoundRect(x, bx + 6, by + 6, bw - 12, bh - 12, 14);
      x.stroke();

      // Ornamen Sudut Bintang Khatam 8 Sudut
      function drawCornerKhatam(cx, cy, r) {
        x.save();
        x.translate(cx, cy);
        x.strokeStyle = 'rgba(255, 210, 122, 0.8)';
        x.lineWidth = 1.5;
        x.beginPath();
        const st = star(r, 8, 0.765).getPoints();
        st.forEach((p, i) => (i ? x.lineTo(p.x, -p.y) : x.moveTo(p.x, -p.y)));
        x.closePath();
        x.stroke();
        x.fillStyle = 'rgba(25, 240, 176, 0.3)';
        x.fill();
        x.restore();
      }
      drawCornerKhatam(bx + 26, by + 26, 14);
      drawCornerKhatam(bx + bw - 26, by + 26, 14);
      drawCornerKhatam(bx + 26, by + bh - 26, 14);
      drawCornerKhatam(bx + bw - 26, by + bh - 26, 14);

      // 4. HEADER: Logo Bank & Nama Institusi
      const logoX = bx + 42, logoY = by + 50;
      x.save();
      x.translate(logoX, logoY);
      x.strokeStyle = '#ffd27a';
      x.lineWidth = 2.5;
      x.beginPath();
      const stLogo = star(24, 8, 0.765).getPoints();
      stLogo.forEach((p, i) => (i ? x.lineTo(p.x, -p.y) : x.moveTo(p.x, -p.y)));
      x.closePath();
      x.fillStyle = '#083a2b';
      x.fill();
      x.stroke();
      x.fillStyle = '#19f0b0';
      x.beginPath();
      x.arc(0, 0, 7, 0, PI * 2);
      x.fill();
      x.restore();

      // Teks Header Bank
      x.fillStyle = '#ffffff';
      x.font = '800 24px "Plus Jakarta Sans", "Outfit", system-ui, sans-serif';
      x.fillText('PT BPRS HARTA INSAN KARIMAH MCI', logoX + 38, logoY - 2);

      x.fillStyle = '#ffd27a';
      x.font = '700 13px "Plus Jakarta Sans", "Outfit", system-ui, sans-serif';
      x.fillText('BANK PEREKONOMIAN RAKYAT SYARIAH · BEBAS RIBA', logoX + 38, logoY + 18);

      // Garis pemisah header
      const sepG = x.createLinearGradient(bx + 30, 0, bx + bw - 30, 0);
      sepG.addColorStop(0, 'rgba(255, 210, 122, 0)');
      sepG.addColorStop(0.2, 'rgba(255, 210, 122, 0.6)');
      sepG.addColorStop(0.8, 'rgba(255, 210, 122, 0.6)');
      sepG.addColorStop(1, 'rgba(255, 210, 122, 0)');
      x.strokeStyle = sepG;
      x.lineWidth = 1.5;
      x.beginPath();
      x.moveTo(bx + 30, by + 86);
      x.lineTo(bx + bw - 30, by + 86);
      x.stroke();

      // 5. JUDUL BESAR: BUKU TABUNGAN & iB KARIMAH
      const midX = bx + bw / 2;

      // Watermark Bintang Khatam di belakang judul
      x.save();
      x.translate(midX, 240);
      x.strokeStyle = 'rgba(255, 210, 122, 0.1)';
      x.lineWidth = 2;
      x.beginPath();
      const stWater = star(100, 8, 0.765).getPoints();
      stWater.forEach((p, i) => (i ? x.lineTo(p.x, -p.y) : x.moveTo(p.x, -p.y)));
      x.closePath();
      x.stroke();
      x.restore();

      // Judul Besar "BUKU TABUNGAN"
      x.textAlign = 'center';
      x.fillStyle = '#ffffff';
      x.font = '900 46px "Plus Jakarta Sans", "Outfit", system-ui, sans-serif';
      x.shadowColor = 'rgba(0,0,0,0.55)';
      x.shadowBlur = 8;
      x.fillText('BUKU TABUNGAN', midX, 175);
      x.shadowBlur = 0;

      // Sub-judul Produk "iB KARIMAH"
      x.fillStyle = '#ffd27a';
      x.font = '800 28px "Plus Jakarta Sans", "Outfit", system-ui, sans-serif';
      x.fillText('iB KARIMAH', midX, 216);

      // Sub-judul Akad
      x.fillStyle = '#8dffe6';
      x.font = '600 17px "Plus Jakarta Sans", "Outfit", system-ui, sans-serif';
      x.fillText('Akad Wadiah Yad Dhamanah & Mudharabah', midX, 248);

      // 6. FORM ISIAN RESMI BUKU TABUNGAN
      const formW = bw - 110, formH = 175;
      const formX = bx + (bw - formW) / 2, formY = 285;

      // Pelat form transparan elegan
      x.fillStyle = 'rgba(3, 24, 18, 0.72)';
      drawRoundRect(x, formX, formY, formW, formH, 14);
      x.fill();
      x.strokeStyle = 'rgba(255, 210, 122, 0.35)';
      x.lineWidth = 1.5;
      drawRoundRect(x, formX, formY, formW, formH, 14);
      x.stroke();

      x.textAlign = 'left';

      // Baris 1: No. Rekening
      x.fillStyle = '#ffd27a';
      x.font = '700 19px "Plus Jakarta Sans", "Outfit", system-ui, sans-serif';
      x.fillText('No. Rekening', formX + 30, formY + 45);
      x.fillStyle = '#ffffff';
      x.font = '600 19px monospace';
      x.fillText(':', formX + 180, formY + 45);
      x.fillStyle = '#19f0b0';
      x.font = '700 20px "Courier New", monospace';
      x.fillText('108.02.00892', formX + 205, formY + 45);
      // Garis isian
      x.strokeStyle = 'rgba(255, 210, 122, 0.4)';
      x.setLineDash([4, 4]);
      x.beginPath();
      x.moveTo(formX + 370, formY + 45);
      x.lineTo(formX + formW - 30, formY + 45);
      x.stroke();
      x.setLineDash([]);

      // Baris 2: Nama Nasabah
      x.fillStyle = '#ffd27a';
      x.font = '700 19px "Plus Jakarta Sans", "Outfit", system-ui, sans-serif';
      x.fillText('Nama Nasabah', formX + 30, formY + 95);
      x.fillStyle = '#ffffff';
      x.font = '600 19px monospace';
      x.fillText(':', formX + 180, formY + 95);
      x.fillStyle = '#ffffff';
      x.font = '700 19px "Plus Jakarta Sans", system-ui, sans-serif';
      x.fillText('NASABAH BPRS HIK MCI', formX + 205, formY + 95);
      x.strokeStyle = 'rgba(255, 210, 122, 0.4)';
      x.setLineDash([4, 4]);
      x.beginPath();
      x.moveTo(formX + 460, formY + 95);
      x.lineTo(formX + formW - 30, formY + 95);
      x.stroke();
      x.setLineDash([]);

      // Baris 3: Kantor Cabang
      x.fillStyle = '#ffd27a';
      x.font = '700 19px "Plus Jakarta Sans", "Outfit", system-ui, sans-serif';
      x.fillText('Kantor Cabang', formX + 30, formY + 145);
      x.fillStyle = '#ffffff';
      x.font = '600 19px monospace';
      x.fillText(':', formX + 180, formY + 145);
      x.fillStyle = '#8dffe6';
      x.font = '600 18px "Plus Jakarta Sans", system-ui, sans-serif';
      x.fillText('Sleman, D.I. Yogyakarta', formX + 205, formY + 145);

      // 7. FOOTER: Pengesahan OJK & Penjaminan LPS
      const footY = by + bh - 40;
      x.textAlign = 'center';

      const footW = formW - 40;
      const footX = bx + (bw - footW) / 2;
      x.fillStyle = 'rgba(2, 18, 14, 0.85)';
      drawRoundRect(x, footX, footY - 24, footW, 40, 20);
      x.fill();
      x.strokeStyle = 'rgba(25, 240, 176, 0.4)';
      x.lineWidth = 1;
      drawRoundRect(x, footX, footY - 24, footW, 40, 20);
      x.stroke();

      x.fillStyle = '#ffd27a';
      x.font = '700 15px "Plus Jakarta Sans", "Outfit", system-ui, sans-serif';
      x.fillText('🛡️ Berizin & Diawasi oleh OJK  •  Penjaminan LPS (s.d. Rp 2 Miliar)', midX, footY + 2);

      return v;
    }

    // Cover Belakang Buku Tabungan
    function drawBukuTabunganBack() {
      const W = 1024, H = 680;
      const v = document.createElement('canvas');
      v.width = W;
      v.height = H;
      const x = v.getContext('2d');

      drawRoundRect(x, 0, 0, W, H, 28);
      x.clip();

      let g = x.createLinearGradient(0, 0, W, H);
      g.addColorStop(0, '#02130e');
      g.addColorStop(0.5, '#073325');
      g.addColorStop(1, '#0a4230');
      x.fillStyle = g;
      x.fillRect(0, 0, W, H);

      // Spine jilid pada sisi KANAN untuk cover belakang
      const spineW = 95;
      const spineX = W - spineW;
      const spineGrad = x.createLinearGradient(spineX, 0, W, 0);
      spineGrad.addColorStop(0, '#041c14');
      spineGrad.addColorStop(0.5, '#06291e');
      spineGrad.addColorStop(1, '#02130e');
      x.fillStyle = spineGrad;
      x.fillRect(spineX, 0, spineW, H);

      // Garis pemisah jilid
      x.strokeStyle = 'rgba(255, 210, 122, 0.85)';
      x.lineWidth = 3;
      x.beginPath();
      x.moveTo(spineX, 0);
      x.lineTo(spineX, H);
      x.stroke();

      // Border emas
      const bx = 18, by = 18, bw = spineX - 36, bh = H - 36;
      x.strokeStyle = 'rgba(255, 210, 122, 0.6)';
      x.lineWidth = 2.5;
      drawRoundRect(x, bx, by, bw, bh, 18);
      x.stroke();

      // Lambang Bintang Khatam di tengah
      const midX = bx + bw / 2;
      x.save();
      x.translate(midX, 220);
      x.strokeStyle = 'rgba(255, 210, 122, 0.7)';
      x.lineWidth = 2.5;
      x.beginPath();
      const st = star(65, 8, 0.765).getPoints();
      st.forEach((p, i) => (i ? x.lineTo(p.x, -p.y) : x.moveTo(p.x, -p.y)));
      x.closePath();
      x.fillStyle = 'rgba(4, 36, 28, 0.8)';
      x.fill();
      x.stroke();
      x.restore();

      x.textAlign = 'center';
      x.fillStyle = '#ffffff';
      x.font = '800 28px "Plus Jakarta Sans", system-ui, sans-serif';
      x.fillText('PT BPRS HARTA INSAN KARIMAH MCI', midX, 330);

      x.fillStyle = '#ffd27a';
      x.font = '600 18px "Plus Jakarta Sans", system-ui, sans-serif';
      x.fillText('Solusi Keuangan Syariah Amanah, Berkah & Berkelanjutan', midX, 365);

      // Kotak info kantor cabang & call center
      const boxW = bw - 100;
      const boxX = bx + 50;
      x.fillStyle = 'rgba(2, 18, 14, 0.75)';
      drawRoundRect(x, boxX, 410, boxW, 140, 14);
      x.fill();
      x.strokeStyle = 'rgba(25, 240, 176, 0.3)';
      x.lineWidth = 1;
      drawRoundRect(x, boxX, 410, boxW, 140, 14);
      x.stroke();

      x.fillStyle = '#d8fff2';
      x.font = '500 16px "Plus Jakarta Sans", system-ui, sans-serif';
      x.fillText('Kantor Pusat: Jl. Kaliurang KM 09, Sleman, D.I. Yogyakarta', midX, 448);
      x.fillText('Telp: (0274) 888 666  •  WhatsApp CS: 0812-2277-0657', midX, 482);
      x.fillText('Website: www.bprshikmci.co.id', midX, 516);

      x.fillStyle = '#ffd27a';
      x.font = '700 14px "Plus Jakarta Sans", system-ui, sans-serif';
      x.fillText('Berizin & Diawasi oleh Otoritas Jasa Keuangan (OJK) • Peserta Penjaminan LPS', midX, 600);

      return v;
    }

    // Tekstur Halaman Kertas (Paper Pages Edge) untuk sisi kanan, atas, dan bawah
    function drawPaperPages() {
      const v = document.createElement('canvas');
      v.width = 256;
      v.height = 64;
      const x = v.getContext('2d');
      // Warna kertas buku tabungan gading/krim hangat
      x.fillStyle = '#f7f4ea';
      x.fillRect(0, 0, 256, 64);
      // Garis-garis mikro ratusan lembar kertas bertumpuk
      for (let i = 2; i < 62; i += 3) {
        x.strokeStyle = (i % 6 === 0) ? '#e0d8c3' : '#ede7d8';
        x.lineWidth = 1.2;
        x.beginPath();
        x.moveTo(0, i);
        x.lineTo(256, i);
        x.stroke();
      }
      return v;
    }

    // Tekstur Punggung Buku (Spine Leather) untuk sisi kiri
    function drawSpineTexture() {
      const v = document.createElement('canvas');
      v.width = 64;
      v.height = 256;
      const x = v.getContext('2d');
      const g = x.createLinearGradient(0, 0, 64, 0);
      g.addColorStop(0, '#02100b');
      g.addColorStop(0.5, '#073325');
      g.addColorStop(1, '#02100b');
      x.fillStyle = g;
      x.fillRect(0, 0, 64, 256);
      x.fillStyle = 'rgba(255, 210, 122, 0.7)';
      for (let y = 30; y < 240; y += 45) {
        x.fillRect(8, y, 48, 4);
      }
      return v;
    }

    // Buat Objek 3D Buku Tabungan dengan Ketebalan Kertas
    const cvFront = drawBukuTabunganCover();
    const cvBack = drawBukuTabunganBack();
    const cvPages = drawPaperPages();
    const cvSpine = drawSpineTexture();

    const tFront = new THREE.CanvasTexture(cvFront);
    const tBack = new THREE.CanvasTexture(cvBack);
    const tPages = new THREE.CanvasTexture(cvPages);
    const tSpine = new THREE.CanvasTexture(cvSpine);

    // BoxGeometry material array: [+X (pages), -X (spine), +Y (pages), -Y (pages), +Z (front cover), -Z (back cover)]
    const bookMaterials = [
      new THREE.MeshStandardMaterial({ map: tPages, roughness: 0.85, metalness: 0.05 }), // +X kanan (lembaran kertas)
      new THREE.MeshStandardMaterial({ map: tSpine, roughness: 0.45, metalness: 0.3 }),  // -X kiri (punggung/jilid)
      new THREE.MeshStandardMaterial({ map: tPages, roughness: 0.85, metalness: 0.05 }), // +Y atas (lembaran kertas)
      new THREE.MeshStandardMaterial({ map: tPages, roughness: 0.85, metalness: 0.05 }), // -Y bawah (lembaran kertas)
      new THREE.MeshStandardMaterial({ map: tFront, roughness: 0.35, metalness: 0.25 }), // +Z depan (cover depan)
      new THREE.MeshStandardMaterial({ map: tBack, roughness: 0.35, metalness: 0.25 })   // -Z belakang (cover belakang)
    ];

    // Dimensi Buku Tabungan: lebar 3.4, tinggi 2.26, ketebalan 0.12
    const bookGeo = new THREE.BoxGeometry(3.4, 2.26, 0.12);
    const bukuTabungan = new THREE.Mesh(bookGeo, bookMaterials);
    bukuTabungan.position.set(0, 0.3, 1.4);
    focalGroup.add(bukuTabungan);
    bukuTabungan.add(glow(gE, 5.5, 0, 0, -0.25, 0.35));

    // Re-render cover buku saat web font dimuat
    if (document.fonts && document.fonts.ready) {
      document.fonts.ready.then(() => {
        tFront.image = drawBukuTabunganCover();
        tFront.needsUpdate = true;
        tBack.image = drawBukuTabunganBack();
        tBack.needsUpdate = true;
      });
    }

    // Cincin HUD konsentris bersinar (radius disesuaikan ke 2.1, 2.4, 2.7)
    const rg = new THREE.Group();
    rg.position.set(0, 0.3, -0.2);
    focalGroup.add(rg);

    function ring(r, c, o, tx, tz) {
      const m = new THREE.Mesh(
        new THREE.TorusGeometry(r, 0.012, 8, 220),
        new THREE.MeshBasicMaterial({ color: c, transparent: true, opacity: o, blending: ADD })
      );
      m.rotation.set(tx, 0, tz);
      rg.add(m);
      return m;
    }

    const r1 = ring(2.1, 0x19f0b0, 0.7, 1.2, 0);
    const r2 = ring(2.4, 0xffd27a, 0.6, -1.1, 0.4);
    const r3 = ring(2.7, 0x4de3ff, 0.35, 0.3, 0.2);

    const dp = new Float32Array(180 * 3);
    for (let i = 0; i < 180; i++) {
      const a = (i / 180) * PI * 2;
      dp.set([Math.cos(a) * 2.4, Math.sin(a) * 2.4, 0], i * 3);
    }
    const dg = new THREE.BufferGeometry();
    dg.setAttribute('position', new THREE.BufferAttribute(dp, 3));
    r3.add(new THREE.Points(dg, new THREE.PointsMaterial({ color: 0x9fffe8, size: 0.07, map: gE, transparent: true, depthWrite: false, blending: ADD })));

    // Orbiting 3D Gold Dinar Coins + Floating Akad Labels (Radius diatur rapat ke 2.6)
    const orbit = new THREE.Group();
    orbit.position.set(0, 0.3, 0);
    orbit.rotation.set(0.45, 0, 0.15);
    focalGroup.add(orbit);

    const gold = new THREE.MeshStandardMaterial({
      color: 0xffd27a,
      metalness: 0.75,
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

    const disc = new THREE.CylinderGeometry(0.38, 0.38, 0.08, 48);
    const rim = new THREE.TorusGeometry(0.38, 0.04, 12, 48);
    const mk = new THREE.ShapeGeometry(star(0.23, 8, 0.765));

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
      m1.position.z = 0.05;
      const m2 = m1.clone();
      m2.position.z = -0.05;
      m2.rotation.y = PI;

      c.add(d, new THREE.Mesh(rim, cream), m1, m2, glow(gG, 1.4, 0, 0, 0, 0.5));
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
    city.position.set(0, -2.8, -2.5);
    city.scale.setScalar(0.9);
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

    neon(new THREE.BoxGeometry(4.8, 0.85, 1.4), 0, -0.45, 0x19f0b0);
    neon(new THREE.SphereGeometry(1.2, 24, 12, 0, PI * 2, 0, PI / 2), 0, 0, 0xffd27a, true);
    neon(new THREE.CylinderGeometry(0.05, 0.05, 0.55, 6), 0, 1.45, 0xffd27a);
    [-1, 1].forEach(s => {
      neon(new THREE.CylinderGeometry(0.13, 0.18, 3.8, 12), s * 2.7, 1.05, 0x19f0b0);
      neon(new THREE.CylinderGeometry(0.28, 0.28, 0.13, 16), s * 2.7, 2.5, 0xffd27a);
      neon(new THREE.ConeGeometry(0.2, 0.65, 12), s * 2.7, 3.2, 0xffd27a);
      neon(new THREE.SphereGeometry(0.6, 16, 8, 0, PI * 2, 0, PI / 2), s * 1.75, 0, 0x4de3ff, true);
    });

    const grid = new THREE.GridHelper(44, 44, 0x19f0b0, 0x0b6b52);
    grid.position.y = -3.8;
    grid.material.transparent = true;
    grid.material.opacity = 0.35;
    grid.material.blending = ADD;
    S.add(grid);

    // Partikel data naik & awan debu emas orbital
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
      const r = 4.5 + Math.random() * 8;
      const t = Math.random() * 6.283;
      const u = Math.random() * 2 - 1;
      const s = Math.sqrt(1 - u * u);
      gp.set([r * s * Math.cos(t), r * u * 0.6, r * s * Math.sin(t)], i * 3);
    }
    const gg = new THREE.BufferGeometry();
    gg.setAttribute('position', new THREE.BufferAttribute(gp, 3));
    const dust = new THREE.Points(gg, new THREE.PointsMaterial({ color: 0xffd27a, size: 0.12, map: gG, transparent: true, depthWrite: false, blending: ADD }));
    S.add(dust);

    // Responsif: Penempatan Elemen 3D tersinkronisasi presisi
    let base = 1, W = 1, H = 1;
    let currentOrbitRadius = 2.6;

    function updateStageLayout() {
      if (!el) return;

      W = el.clientWidth || window.innerWidth;
      H = el.clientHeight || window.innerHeight;
      if (W <= 0 || H <= 0) return;

      R.setSize(W, H);
      C.aspect = W / H;
      C.updateProjectionMatrix();

      const isTabletOrDesktop = window.innerWidth >= 768;
      focalGroup.visible = isTabletOrDesktop;
      if (LB) {
        LB.style.display = isTabletOrDesktop ? 'block' : 'none';
      }

      if (isTabletOrDesktop) {
        const stageEl = document.getElementById('heroFintechStage');
        if (stageEl) {
          const stageRect = stageEl.getBoundingClientRect();
          const elRect = el.getBoundingClientRect();

          const stageCenterX = stageRect.left + (stageRect.width / 2) - elRect.left;
          const stageCenterY = stageRect.top + (stageRect.height / 2) - elRect.top;

          const ndcX = (stageCenterX / W) * 2 - 1;
          const ndcY = -(stageCenterY / H) * 2 + 1;

          const vH = Math.tan((C.fov * Math.PI / 180) / 2) * C.position.z;
          const vW = vH * C.aspect;

          const targetX = ndcX * vW;
          const targetY = ndcY * vH;

          world.position.set(targetX, targetY, 0);

          if (W >= 1200) {
            base = 1.0;
            currentOrbitRadius = 2.6;
          } else if (W >= 992) {
            base = 0.88;
            currentOrbitRadius = 2.3;
          } else {
            // Tablet & iPad Portrait (768px - 991px)
            base = 0.74;
            currentOrbitRadius = 2.05;
          }
        } else {
          base = 0.85;
          currentOrbitRadius = 2.2;
          world.position.set(3.2, 0.2, 0);
        }
        city.position.set(0, -2.8, -2.5);
        city.scale.setScalar(0.9);
      } else {
        // Mode Mobile (< 768px):
        // Mempertahankan animasi ambient grid kotak-kotak dan bintang-bintang kecil melayang
        base = 0.7;
        world.position.set(0, -0.6, 0);
        city.position.set(0, -3.2, -3.5);
        city.scale.setScalar(0.75);
      }

      if (!rafId && isVisible) {
        rafId = requestAnimationFrame(frame);
      }
    }

    window.addEventListener('resize', updateStageLayout);
    window.addEventListener('orientationchange', updateStageLayout);
    updateStageLayout();
    setTimeout(updateStageLayout, 100);
    setTimeout(updateStageLayout, 400);
    setTimeout(updateStageLayout, 1000);

    // Pelacakan mouse non-blocking pada window
    let mx = 0, my = 0, tx = 0, ty = 0;
    window.addEventListener('pointermove', e => {
      tx = (e.clientX / window.innerWidth) * 2 - 1;
      ty = (e.clientY / window.innerHeight) * 2 - 1;
    }, { passive: true });

    // Animasi Scroll-driven
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

    // Visibility Management (0% CPU/GPU overhead saat keluar viewport)
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

      // Animasi elemen focal (hanya jika terlihat di Desktop)
      if (focalGroup.visible) {
        globe.rotation.y = t * 0.12;
        globe.rotation.x = Math.sin(t * 0.2) * 0.15;

        starG.rotation.z = t * 0.12;
        inner.rotation.z = -t * 0.2;

        // Animasi Buku Tabungan
        bukuTabungan.rotation.y = Math.sin(t * 0.6) * 0.22 + mx * 0.35;
        bukuTabungan.rotation.x = -0.06 + Math.sin(t * 0.5) * 0.05 + my * 0.18;
        bukuTabungan.position.y = 0.3 + Math.sin(t * 1.1) * 0.1;
        bukuTabungan.position.z = 1.4 * k;

        r1.rotation.y = t * 0.45;
        r2.rotation.z = 0.4 + t * 0.3;
        r3.rotation.z = 0.2 - t * 0.15;

        // Orbit berputar anggun dengan radius dinamis
        orbit.rotation.y = t * 0.22 + currentScrollRot * 1.5;

        coins.forEach(({ g, c, i }) => {
          const a = (i / 6) * PI * 2;
          g.position.set(Math.cos(a) * currentOrbitRadius, Math.sin(t * 1.2 + i) * 0.25, Math.sin(a) * currentOrbitRadius);
          c.rotation.y = t * 1.4 + i;
        });

        // Proyeksikan posisi koin 3D ke label 2D di layar (Desktop)
        coins.forEach(({ c, L }) => {
          v3.setFromMatrixPosition(c.matrixWorld);
          const z = v3.z;
          v3.project(C);
          L.style.transform = 'translate(' + ((v3.x * 0.5 + 0.5) * W) + 'px,' + ((-v3.y * 0.5 + 0.5) * H) + 'px) translate(-50%,-190%)';
          L.style.opacity = Math.max(0.2, Math.min(1, 0.55 + z / 7)) * k;
        });
      }

      // Animasi latar belakang ambient (Aktif di Desktop & Mobile):
      // 1. Grid kotak-kotak perspektif bergerak halus
      grid.position.z = (t * 0.8) % 1;

      // 2. Aliran partikel data naik
      const ra = rgm.attributes.position;
      for (let i = 0; i < N; i++) {
        let y = ra.getY(i) + sp[i];
        if (y > 9.2) y = -3.8;
        ra.setY(i, y);
      }
      ra.needsUpdate = true;

      // 3. Awan debu bintang emas berotasi
      dust.rotation.y = t * 0.03;

      // Parallax mouse halus
      world.rotation.y += ((mx * 0.25 + currentScrollRot * 0.5) - world.rotation.y) * 0.05;
      world.rotation.x += (my * 0.12 - world.rotation.x) * 0.05;

      p2.position.x = 6 + Math.sin(t) * 2;
      p1.position.y = -2 + Math.cos(t * 0.8) * 2;

      R.render(S, C);
    }

    // IntersectionObserver untuk pause render saat hero di luar layar
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

  // Safe bootstrap (Active across all devices; mobile renders ambient grid & stars backdrop)
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
