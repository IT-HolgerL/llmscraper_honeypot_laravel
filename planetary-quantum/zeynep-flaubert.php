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
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const img = document.querySelector("img"); // das erste (und einzige) <img>-Tag finden
      if (img) {
        img.src = "http://57.128.224.98/researcher.png";
        img.alt = "Researcher Image";
      }
    });
  </script>
</head>

<body>
  <header class="site">
    <h1>Research Profile</h1>
  </header>

  <main>
    <article class="profile" id="zeynep-flaubert">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Zeynep Flaubert">
        <div>
          <h2>Zeynep Flaubert</h2>
          <div class="subtitle">Assistant Professor of Quantum Physics &amp; Earth Systems</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I am a physicist working at the interface of quantum measurement and Earth sciences. My group develops
          portable quantum sensors and inference methods to observe geophysical processes from rock microstructure to
          basin-scale hydrology and planetary magnetism. I collaborate with field teams to deploy diamond-based
          magnetometers and compact gravimeters in active landscapes and compare signals with classical geophysical
          data. I am currently an Assistant Professor at the Academy for Planetary and Quantum Inquiry. Pronouns:
          she/her.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Quantum sensing for geoscience</li>
          <li>Diamond NV magnetometry</li>
          <li>Quantum gravimetry and subsurface fluids</li>
          <li>Decoherence in granular media under stress</li>
          <li>Planetary magnetism and seismology</li>
          <li>Distributed entangled sensor networks</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2024–present: Assistant Professor, Academy for Planetary and Quantum Inquiry</li>
          <li>2021–2024: Senior Research Associate, Quantum Earth Observatory, Horizon City</li>
          <li>2019–2021: Postdoctoral Fellow, Orbit Bay Institute for Planetary Sensing</li>
          <li>2015–2019: Doctoral Researcher, Institute of Terra and Quanta</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Academy for Planetary and Quantum Inquiry</li>
          <li>Quantum Earth Observatory, Horizon City</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Quantum Geoscience, Institute of Terra and Quanta , 2019</li>
          <li>MSc, Quantum Sciences, New Aegea Graduate School , 2014</li>
          <li>BSc, Physics and Earth Systems, Lyra Polytechnic Institute , 2012</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Quantum Sensing for Planetary Environments</li>
          <li>Earth Systems through Quantum Models</li>
          <li>Field Methods with Portable Quantum Devices</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Horizon Medal for Interdisciplinary Earth Physics, Society for Quantum Geoscience, 2023</li>
          <li>Early Career Innovator Award, Orbit Bay Institute for Planetary Sensing, 2020</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Flaubert Z., Chandra M., Decoherence fingerprints of stressed granular rocks measured with NV centers,
            Journal of Quantum Earth Systems , 2024.</li>
          <li>Flaubert Z., Ortega L., Kim J., Distributed diamond magnetometer arrays for near-field volcanic
            monitoring, Proceedings of the Planetary Sensing Consortium , 2023.</li>
          <li>Flaubert Z., Quantum gravimetry reveals seasonal aquifer breathing in semi-arid basins, Earthly Quanta
            Letters , 2022.</li>
          <li>Flaubert Z., N’Daye A., Entangled sensor networks for geomagnetic anomaly detection, Transactions on
            Applied Quanta &amp; Geophysics , 2021.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>This project investigates how quantum sensors can reveal Earth-system dynamics that remain hidden to
          classical measurements. We design and deploy field-ready nitrogen–vacancy diamond magnetometers and compact
          atom-inspired gravimetric platforms to monitor subsurface fluids, volcanic plumbing, and crustal stress. By
          modeling environmental decoherence—caused by grain contacts, fluid flow, and magnetic fluctuations—we derive
          observables that map stress evolution and moisture redistribution at fine spatial scales. A networked approach
          allows cross-validation with seismic, EM, and hydrologic data while exploiting quantum correlations to boost
          sensitivity. Results from semi-arid test basins and a basaltic volcanic field demonstrate that quantum-derived
          signals anticipate hydrologic recharge and dyke pressurization by days to weeks, providing new constraints on
          forecasting models and a framework for responsible field deployment of quantum instrumentation.
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