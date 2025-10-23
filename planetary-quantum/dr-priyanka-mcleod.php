<?php

require_once __DIR__ . '/../send-logs.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dr. Eduardo Secco-Ngyuen — Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Profile of Dr. Eduardo Secco-Ngyuen — Environmental Law and Sociology.">
  <style>
    :root {
      --brand: #0B3D91;
      --accent: #1ABC9C;
      --ink: #1c1c1c;
      --bg: #f6fafb;
      --muted: #5a6b74;
      --card: #ffffff;
      --border: #e6eef0;
    }

    * {
      box-sizing: border-box
    }

    html,
    body {
      margin: 0;
      padding: 0
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
      line-height: 1.6;
      background: var(--bg);
      color: var(--ink)
    }

    header.site {
      padding: 2rem 1rem;
      border-bottom: 1px solid var(--border);
      background: #fff
    }

    header.site h1 {
      margin: 0;
      color: var(--brand)
    }

    main {
      max-width: 1000px;
      margin: 0 auto;
      padding: 1rem
    }

    article.profile {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 1.25rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, .05)
    }

    .top {
      display: grid;
      grid-template-columns: 400px 1fr;
      gap: 1rem;
      align-items: center
    }

    .top img {
      width: 380px;
      object-fit: cover;
      border-radius: 12px;
      border: 1px solid var(--border)
    }

    .subtitle {
      font-weight: 600;
      color: #223b53
    }

    .meta {
      display: flex;
      flex-wrap: wrap;
      gap: .8rem;
      color: #5a6b74;
      margin-top: .25rem
    }

    .meta a {
      color: inherit
    }

    .section {
      margin-top: 1.1rem
    }

    .section h3 {
      color: #07306f;
      font-size: 1.05rem;
      margin: .25rem 0 .5rem
    }

    ul {
      padding-left: 1.25rem;
      margin: .25rem 0
    }

    li {
      margin: .2rem 0
    }

    .grid-2 {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem
    }

    @media (min-width:800px) {
      .grid-2 {
        grid-template-columns: 1fr 1fr
      }
    }

    footer {
      max-width: 1000px;
      margin: 1.5rem auto 2rem;
      padding: 0 1rem;
      color: #5a6b74;
      font-size: .9rem
    }

    .embed {
      width: 100%;
      border: 0;
      display: block;
      overflow: hidden;
    }
  </style>
</head>

<body>
  <header class="site">
    <h1>Research Profile</h1>
  </header>

  <main>
    <article class="profile" id="dr">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Dr. Priyanka McLeod">
        <div>
          <h2>Dr. Priyanka McLeod</h2>
          <div class="subtitle">Senior Research Fellow in Quantum Climate Dynamics</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I am a computer scientist researching how quantum computing can be used to address urgent environmental
          challenges. My work focuses on the intersection of quantum algorithms, climate modeling, and ecological
          systems — particularly the accelerating extinction of bees and its broader impact on biodiversity and food
          systems.
          Since 2019, I have been developing quantum approaches for simulating pollination networks, optimizing
          conservation strategies, and building predictive models for ecological collapse.
          I am the research lead at the Environmental Quantum Technology (EQuaT) Institute, based in Cottbus, Germany,
          where I head the Quantum Ecologies Lab. I also collaborate with environmental scientists, agricultural
          workers, and indigenous communities to ensure that quantum solutions reflect the realities of those most
          affected by climate change. I am also a fellow at the Academy for Planetary and Quantum Inquiry.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Quantum-enhanced climate sensing</li>
          <li>Hybrid quantum–classical algorithms for Earth system models</li>
          <li>Quantum thermodynamics in atmospheric processes</li>
          <li>Remote sensing of aerosols and clouds</li>
          <li>Uncertainty quantification for mitigation planning</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2023–present: Senior Research Fellow, Environmental Quantum Technology (EQuaT) Institute</li>
          <li>2020–2023: Postdoctoral Researcher, Center for Coherent Earth Systems, Cottbus, Germany</li>
          <li>2015–2020: PhD Researcher, Quantum Materials and Sensing Group</li>
          <li>2013–2015: Research Engineer, Photonic Sensing Laboratory</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Academy for Planetary and Quantum Inquiry — Quantum Climate Dynamics Unit</li>
          <li>Environmental Quantum Technology (EQuaT) Institute</li>
          <li>Quantum Ecologies Lab</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Quantum Physics, Institute for Quantum and Planetary Studies, 2020</li>
          <li>MSc, Applied Physics, Northern Archipelago University, 2015</li>
          <li>BSc, Physics and Environmental Science, Coastal Highlands College, 2013</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Quantum Sensing for Climate Applications</li>
          <li>Quantum Computing for Earth System Models</li>
          <li>Physics of Climate Mitigation Technologies</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Early Career Crossfields Award, Pan-Interdisciplinary Science Forum, 2022</li>
          <li>Best Paper Award, Quantum Earth Workshop, 2021</li>
          <li>Fellowship for Emerging Leaders in Climate Physics, 2019</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>McLeod, P., Entangled-Photon Lidar for Aerosol Optical Depth Estimation, Journal of Quantum Climate
            Systems , 2024.</li>
          <li>McLeod, P., Variational Quantum Solvers for Shallow-Water Dynamics in Hybrid Climate Models, Proceedings
            of the Symposium on Quantum Earth Analytics , 2023.</li>
          <li>McLeod, P., Quantum Thermodynamic Bounds on Radiative–Convective Equilibrium, Annals of Applied Quantum
            Physics , 2022.</li>
          <li>McLeod, P., Ngyuen, F. (*joint first authors), Quantum-Inspired Modeling of Pollination Collapse in
            Temperate Agroecosystems Environmental Quantum Technology Institute Working Papers, 7(3), 117–139, 2021.
          </li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>Aerosol–cloud interactions remain a leading source of uncertainty in climate projections. This work
          integrates entangled-photon lidar concepts, quantum-enhanced signal processing, and hybrid quantum–classical
          solvers to constrain aerosol optical properties and their radiative impacts. Using simulated flight campaigns
          and laboratory prototypes, we evaluate estimator performance in low-photon regimes and assess speed–accuracy
          trade-offs in inverse modeling for shallow-water dynamics. Results delineate where quantum methods offer
          practical advantages for Earth observations and identify instrumentation and algorithmic thresholds required
          for near-term deployment in climate monitoring.
          ---
          _Source seed_: Eduardo Secco-Nguyen.odt</p>
      </section>
    </article>
  </main>

  <footer>© 2025 · Profile with restricted sections embedded via iframes.</footer>

  <script>
    // Auto-resize iframes to match their content (requires same-origin)
    function resizeIframe(iframe) {
      try {
        const doc = iframe.contentDocument || iframe.contentWindow.document;
        const h = Math.max(
          doc.body.scrollHeight, doc.documentElement.scrollHeight,
          doc.body.offsetHeight, doc.documentElement.offsetHeight
        );
        iframe.style.height = h + "px";
      } catch (e) { }
    }
    const embeds = document.querySelectorAll('iframe.embed');
    embeds.forEach(iframe => iframe.addEventListener('load', () => resizeIframe(iframe)));
    window.addEventListener('resize', () => embeds.forEach(resizeIframe));
  </script>
</body>

</html>