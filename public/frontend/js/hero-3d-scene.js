/**
 * PT BPRS HIK MCI - 3D Interactive WebGL Hero Scene
 * Powered by Three.js with Real-time Mouse Parallax & Scroll-Driven Animation
 * Follows 3D Website Architect & Spline-Interactive Design Engineering Standards
 */
(function() {
  'use strict';

  // Check WebGL availability
  function isWebGLAvailable() {
    try {
      const canvas = document.createElement('canvas');
      return !!(window.WebGLRenderingContext && (canvas.getContext('webgl') || canvas.getContext('experimental-webgl')));
    } catch (e) {
      return false;
    }
  }

  function initHero3D() {
    const container = document.getElementById('sharia3DCanvasStage');
    const canvas = document.getElementById('hero3DCanvas');
    if (!container || !canvas || !isWebGLAvailable() || typeof THREE === 'undefined') {
      return;
    }

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Dimensions
    let width = container.clientWidth || 420;
    let height = container.clientHeight || 340;

    // 1. Scene, Camera, Renderer
    const scene = new THREE.Scene();

    const camera = new THREE.PerspectiveCamera(42, width / height, 0.1, 100);
    camera.position.set(0, 0.6, 7.2);

    const renderer = new THREE.WebGLRenderer({
      canvas: canvas,
      alpha: true,
      antialias: true,
      powerPreference: 'high-performance'
    });
    renderer.setSize(width, height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.toneMappingExposure = 1.1;

    // Root Group for interactive rotation
    const worldGroup = new THREE.Group();
    scene.add(worldGroup);

    // Sub-group for building
    const bankGroup = new THREE.Group();
    worldGroup.add(bankGroup);

    // 2. Lighting Setup (Fintech Emerald, Gold, and Cyan Accents)
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.85);
    scene.add(ambientLight);

    const dirLight = new THREE.DirectionalLight(0xfffbeb, 1.4);
    dirLight.position.set(5, 9, 6);
    scene.add(dirLight);

    const cyanPointLight = new THREE.PointLight(0x00e5ff, 2.8, 15);
    cyanPointLight.position.set(-3.5, 1.8, 3.5);
    scene.add(cyanPointLight);

    const goldPointLight = new THREE.PointLight(0xfbbf24, 2.5, 15);
    goldPointLight.position.set(3.5, -1.5, 3.5);
    scene.add(goldPointLight);

    const greenBaseLight = new THREE.PointLight(0x10b981, 2.0, 10);
    greenBaseLight.position.set(0, -2, 2);
    scene.add(greenBaseLight);

    // 3. Materials
    const goldMaterial = new THREE.MeshStandardMaterial({
      color: 0xf59e0b,
      metalness: 0.88,
      roughness: 0.22,
      envMapIntensity: 1.2
    });

    const emeraldGlassMaterial = new THREE.MeshPhysicalMaterial({
      color: 0x0d6824,
      metalness: 0.25,
      roughness: 0.18,
      transmission: 0.6,
      transparent: true,
      opacity: 0.92,
      reflectivity: 0.8
    });

    const cyanGlassMaterial = new THREE.MeshPhysicalMaterial({
      color: 0x0096c7,
      metalness: 0.35,
      roughness: 0.15,
      transmission: 0.65,
      transparent: true,
      opacity: 0.85,
      reflectivity: 0.9
    });

    const darkPodiumMaterial = new THREE.MeshStandardMaterial({
      color: 0x062810,
      metalness: 0.45,
      roughness: 0.35
    });

    const cardGlassMaterial = new THREE.MeshPhysicalMaterial({
      color: 0x38bdf8,
      metalness: 0.2,
      roughness: 0.12,
      transparent: true,
      opacity: 0.78,
      reflectivity: 0.95
    });

    // 4. Constructing Modern Islamic Bank Architecture
    // 4a. Layered Podium Base
    const baseGeo = new THREE.CylinderGeometry(2.3, 2.5, 0.28, 32);
    const baseMesh = new THREE.Mesh(baseGeo, darkPodiumMaterial);
    baseMesh.position.y = -1.35;
    bankGroup.add(baseMesh);

    // Podium Gold Trim Ring
    const ringGeo = new THREE.TorusGeometry(2.38, 0.04, 16, 64);
    ringGeo.rotateX(Math.PI / 2);
    const ringMesh = new THREE.Mesh(ringGeo, goldMaterial);
    ringMesh.position.y = -1.22;
    bankGroup.add(ringMesh);

    // 4b. Lower Bank Hall (Emerald Glass Cubic Structure)
    const lowerHallGeo = new THREE.BoxGeometry(2.2, 1.1, 2.2);
    const lowerHallMesh = new THREE.Mesh(lowerHallGeo, emeraldGlassMaterial);
    lowerHallMesh.position.y = -0.7;
    bankGroup.add(lowerHallMesh);

    // Gold Corner Pillars for Lower Hall
    const pillarPositions = [
      [-1.08, -0.7, -1.08],
      [1.08, -0.7, -1.08],
      [-1.08, -0.7, 1.08],
      [1.08, -0.7, 1.08]
    ];
    pillarPositions.forEach(pos => {
      const pGeo = new THREE.BoxGeometry(0.08, 1.12, 0.08);
      const pMesh = new THREE.Mesh(pGeo, goldMaterial);
      pMesh.position.set(pos[0], pos[1], pos[2]);
      bankGroup.add(pMesh);
    });

    // 4c. Islamic Arch Portal Entrance (Front Facade)
    const archPortalGroup = new THREE.Group();
    const archTopGeo = new THREE.TorusGeometry(0.38, 0.05, 16, 32, Math.PI);
    const archTopMesh = new THREE.Mesh(archTopGeo, goldMaterial);
    archTopMesh.position.set(0, -0.5, 1.13);
    archPortalGroup.add(archTopMesh);

    const archLeftCol = new THREE.Mesh(new THREE.BoxGeometry(0.06, 0.55, 0.06), goldMaterial);
    archLeftCol.position.set(-0.38, -0.78, 1.13);
    archPortalGroup.add(archLeftCol);

    const archRightCol = new THREE.Mesh(new THREE.BoxGeometry(0.06, 0.55, 0.06), goldMaterial);
    archRightCol.position.set(0.38, -0.78, 1.13);
    archPortalGroup.add(archRightCol);
    bankGroup.add(archPortalGroup);

    // 4d. Middle Floor Terrace & Upper Penthouse (Cyan Glass)
    const midSlabGeo = new THREE.BoxGeometry(2.35, 0.12, 2.35);
    const midSlabMesh = new THREE.Mesh(midSlabGeo, goldMaterial);
    midSlabMesh.position.y = -0.1;
    bankGroup.add(midSlabMesh);

    const upperPenthouseGeo = new THREE.BoxGeometry(1.7, 0.95, 1.7);
    const upperPenthouseMesh = new THREE.Mesh(upperPenthouseGeo, cyanGlassMaterial);
    upperPenthouseMesh.position.y = 0.44;
    bankGroup.add(upperPenthouseMesh);

    // 4e. Dome Roof & Golden Finial Spire
    const domeGeo = new THREE.SphereGeometry(0.72, 32, 16, 0, Math.PI * 2, 0, Math.PI * 0.5);
    const domeMesh = new THREE.Mesh(domeGeo, emeraldGlassMaterial);
    domeMesh.position.y = 0.92;
    bankGroup.add(domeMesh);

    const spireGeo = new THREE.ConeGeometry(0.09, 0.65, 16);
    const spireMesh = new THREE.Mesh(spireGeo, goldMaterial);
    spireMesh.position.y = 1.75;
    bankGroup.add(spireMesh);

    // Initial Isometric Orientation
    bankGroup.rotation.y = Math.PI * 0.22;
    bankGroup.rotation.x = Math.PI * 0.06;

    // 5. Floating Gold Dinar Coins in 3D Space
    const coins = [];
    const coinConfig = [
      { radius: 2.3, y: 0.9, angle: 0.35, speed: 0.02, tiltX: 0.4, tiltZ: 0.3 },
      { radius: 2.4, y: -0.6, angle: 2.1, speed: -0.018, tiltX: -0.5, tiltZ: 0.2 },
      { radius: 2.0, y: 1.4, angle: 3.8, speed: 0.015, tiltX: 0.3, tiltZ: -0.4 },
      { radius: 2.5, y: -0.9, angle: 5.2, speed: -0.022, tiltX: -0.3, tiltZ: 0.5 }
    ];

    const coinGeo = new THREE.CylinderGeometry(0.34, 0.34, 0.05, 32);
    coinConfig.forEach(cfg => {
      const coinMesh = new THREE.Mesh(coinGeo, goldMaterial);
      const coinHolder = {
        mesh: coinMesh,
        cfg: cfg,
        baseRadius: cfg.radius,
        baseY: cfg.y,
        currentAngle: cfg.angle
      };
      coinMesh.position.set(
        Math.cos(cfg.angle) * cfg.radius,
        cfg.y,
        Math.sin(cfg.angle) * cfg.radius
      );
      coinMesh.rotation.set(cfg.tiltX, cfg.angle, cfg.tiltZ);
      worldGroup.add(coinMesh);
      coins.push(coinHolder);
    });

    // 6. Floating Digital Sharia Cards (Glassmorphism 3D)
    const cards = [];
    // Card 1: Cyan Front Left
    const card1Mesh = new THREE.Mesh(new THREE.BoxGeometry(1.3, 0.82, 0.035), cardGlassMaterial);
    const chip1Mesh = new THREE.Mesh(new THREE.BoxGeometry(0.24, 0.18, 0.045), goldMaterial);
    chip1Mesh.position.set(-0.35, 0.1, 0.01);
    card1Mesh.add(chip1Mesh);
    card1Mesh.position.set(-2.0, 0.7, 1.2);
    card1Mesh.rotation.set(0.2, 0.4, -0.15);
    worldGroup.add(card1Mesh);
    cards.push({ mesh: card1Mesh, basePos: { x: -2.0, y: 0.7, z: 1.2 }, rotSpeed: 0.008 });

    // Card 2: Emerald Bottom Right
    const card2Mesh = new THREE.Mesh(new THREE.BoxGeometry(1.15, 0.72, 0.035), emeraldGlassMaterial);
    const chip2Mesh = new THREE.Mesh(new THREE.BoxGeometry(0.2, 0.16, 0.045), goldMaterial);
    chip2Mesh.position.set(-0.3, 0.08, 0.01);
    card2Mesh.add(chip2Mesh);
    card2Mesh.position.set(2.0, -0.6, 0.9);
    card2Mesh.rotation.set(-0.25, -0.35, 0.1);
    worldGroup.add(card2Mesh);
    cards.push({ mesh: card2Mesh, basePos: { x: 2.0, y: -0.6, z: 0.9 }, rotSpeed: -0.006 });

    // 7. Golden Crescent Moon Accent
    const crescentGroup = new THREE.Group();
    const crescentTorus = new THREE.Mesh(
      new THREE.TorusGeometry(0.38, 0.075, 16, 48, Math.PI * 1.35),
      goldMaterial
    );
    crescentTorus.rotation.z = Math.PI * 0.3;
    crescentGroup.add(crescentTorus);

    // 8-Point Geometric Star next to Crescent
    const starShape = new THREE.Shape();
    const starPoints = 8;
    const outerR = 0.14;
    const innerR = 0.07;
    for (let i = 0; i < starPoints * 2; i++) {
      const r = i % 2 === 0 ? outerR : innerR;
      const a = (i / (starPoints * 2)) * Math.PI * 2;
      const sx = Math.cos(a) * r;
      const sy = Math.sin(a) * r;
      if (i === 0) starShape.moveTo(sx, sy);
      else starShape.lineTo(sx, sy);
    }
    starShape.closePath();
    const starExtrude = new THREE.ExtrudeGeometry(starShape, { depth: 0.04, bevelEnabled: false });
    const starMesh = new THREE.Mesh(starExtrude, goldMaterial);
    starMesh.position.set(0.38, 0.32, 0);
    crescentGroup.add(starMesh);

    crescentGroup.position.set(1.4, 1.9, 0.6);
    crescentGroup.rotation.y = 0.2;
    worldGroup.add(crescentGroup);

    // 8. Shimmering Ambient Particle Field (Financial Node Galaxy)
    const particleCount = 110;
    const particleGeo = new THREE.BufferGeometry();
    const particlePos = new Float32Array(particleCount * 3);
    const particleColors = new Float32Array(particleCount * 3);

    const cEmerald = new THREE.Color(0x10b981);
    const cCyan = new THREE.Color(0x38bdf8);
    const cGold = new THREE.Color(0xfbbf24);

    for (let i = 0; i < particleCount; i++) {
      const i3 = i * 3;
      const radius = 1.8 + Math.random() * 3.2;
      const theta = Math.random() * Math.PI * 2;
      const phi = (Math.random() - 0.5) * Math.PI;

      particlePos[i3] = radius * Math.cos(phi) * Math.cos(theta);
      particlePos[i3 + 1] = radius * Math.sin(phi);
      particlePos[i3 + 2] = radius * Math.cos(phi) * Math.sin(theta);

      const chosenColor = (i % 3 === 0) ? cGold : (i % 3 === 1) ? cCyan : cEmerald;
      particleColors[i3] = chosenColor.r;
      particleColors[i3 + 1] = chosenColor.g;
      particleColors[i3 + 2] = chosenColor.b;
    }

    particleGeo.setAttribute('position', new THREE.BufferAttribute(particlePos, 3));
    particleGeo.setAttribute('color', new THREE.BufferAttribute(particleColors, 3));

    const particleMat = new THREE.PointsMaterial({
      size: 0.065,
      vertexColors: true,
      transparent: true,
      opacity: 0.75,
      blending: THREE.AdditiveBlending
    });

    const particles = new THREE.Points(particleGeo, particleMat);
    worldGroup.add(particles);

    // 9. Interactive State & Physics Tracking
    let mouseX = 0;
    let mouseY = 0;
    let targetRotY = 0;
    let targetRotX = 0;
    let currentRotY = 0;
    let currentRotX = 0;

    // Scroll state
    let scrollProgress = 0;
    let targetScrollRot = 0;
    let currentScrollRot = 0;

    function onMouseMove(e) {
      if (prefersReducedMotion) return;
      const rect = container.getBoundingClientRect();
      // Normalized between -1 and 1
      mouseX = ((e.clientX - rect.left) / rect.width) * 2 - 1;
      mouseY = -(((e.clientY - rect.top) / rect.height) * 2 - 1);

      targetRotY = mouseX * 0.45;
      targetRotX = mouseY * 0.35;
    }

    function onMouseLeave() {
      targetRotY = 0;
      targetRotX = 0;
    }

    container.addEventListener('mousemove', onMouseMove, { passive: true });
    container.addEventListener('mouseleave', onMouseLeave, { passive: true });

    // 10. Scroll-Driven Animation Handler
    function onScroll() {
      if (prefersReducedMotion) return;
      const scrollY = window.scrollY || window.pageYOffset;
      const maxScroll = Math.max(window.innerHeight * 0.9, 500);
      scrollProgress = Math.min(Math.max(scrollY / maxScroll, 0), 1.5);
      // Smooth dynamic rotation driven by scroll
      targetScrollRot = scrollProgress * Math.PI * 0.65;
    }

    window.addEventListener('scroll', onScroll, { passive: true });

    // 11. Resize Handler
    function onResize() {
      width = container.clientWidth || 420;
      height = container.clientHeight || 340;
      camera.aspect = width / height;
      camera.updateProjectionMatrix();
      renderer.setSize(width, height);
    }

    window.addEventListener('resize', onResize, { passive: true });

    // 12. Visibility Observer (Pause RAF when not visible to ensure 0% wasted GPU)
    let isVisible = true;
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        isVisible = entry.isIntersecting;
      });
    }, { threshold: 0.05 });

    observer.observe(container);

    // 13. Animation Loop
    let clock = new THREE.Clock();

    function animate() {
      requestAnimationFrame(animate);

      if (!isVisible) return;

      const delta = clock.getDelta();
      const elapsedTime = clock.getElapsedTime();

      // Smooth inertia lerping for mouse rotation
      currentRotY += (targetRotY - currentRotY) * 0.06;
      currentRotX += (targetRotX - currentRotX) * 0.06;

      // Smooth inertia lerping for scroll rotation
      currentScrollRot += (targetScrollRot - currentScrollRot) * 0.08;

      // Apply rotations to worldGroup
      worldGroup.rotation.y = currentRotY + currentScrollRot;
      worldGroup.rotation.x = currentRotX;

      // Idle floating levitation for bank building
      bankGroup.position.y = Math.sin(elapsedTime * 1.2) * 0.07;
      bankGroup.rotation.y = Math.PI * 0.22 + Math.sin(elapsedTime * 0.8) * 0.04;

      // Animate Gold Coins Orbiting & Spinning
      coins.forEach((c, idx) => {
        c.currentAngle += c.cfg.speed * (1 + scrollProgress * 0.5);
        // Expanding orbit radius dynamically on scroll!
        const dynamicRadius = c.baseRadius * (1 + scrollProgress * 0.45);
        c.mesh.position.x = Math.cos(c.currentAngle) * dynamicRadius;
        c.mesh.position.z = Math.sin(c.currentAngle) * dynamicRadius;
        c.mesh.position.y = c.baseY + Math.sin(elapsedTime * 2.2 + idx) * 0.12;

        c.mesh.rotation.x += 0.015;
        c.mesh.rotation.y += 0.02;
      });

      // Animate Floating Cards
      cards.forEach((c, idx) => {
        const floatOffset = Math.sin(elapsedTime * 1.5 + idx * 2) * 0.08;
        c.mesh.position.y = c.basePos.y + floatOffset;
        c.mesh.rotation.z += c.rotSpeed * 0.4;
      });

      // Animate Crescent & Star
      crescentGroup.position.y = 1.9 + Math.sin(elapsedTime * 1.4) * 0.09;
      crescentGroup.rotation.y = 0.2 + Math.sin(elapsedTime * 0.9) * 0.15;

      // Drift Ambient Particle Galaxy
      particles.rotation.y = elapsedTime * 0.05;
      particles.rotation.x = Math.sin(elapsedTime * 0.03) * 0.1;

      // Render Scene
      renderer.render(scene, camera);
    }

    animate();
  }

  // Initialize once DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHero3D);
  } else {
    initHero3D();
  }
})();
