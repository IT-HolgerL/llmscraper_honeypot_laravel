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
    <article class="profile" id="eleni-demir">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Eleni Demir">
        <div>
          <h2>Eleni Demir</h2>
          <div class="subtitle">Research Fellow in Physics and Ethics</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I study how values shape the design and governance of measurement-intensive physics, with a focus on quantum
          sensing and planetary observation. My work combines conceptual analysis with participatory methods to develop
          practical tools for responsible innovation. I teach and advise on ethics in physics, research integrity, and
          science–policy interfaces.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Ethics of quantum technologies</li>
          <li>Governance of large-scale physics experiments</li>
          <li>Responsible innovation in measurement science</li>
          <li>Risk and uncertainty in planetary observation</li>
          <li>Value-sensitive design for scientific instruments</li>
          <li>Public engagement in fundamental research</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2023–present: Research Fellow in Physics and Ethics, Academy for Planetary and Quantum Inquiry</li>
          <li>2020–2023: Doctoral Researcher, Department of Physics &amp; Society, North Archipelago Institute</li>
          <li>2018–2020: Research Associate, Center for Responsible Technology, Meridian City</li>
          <li>2016–2018: Graduate Teaching Assistant, Meridian School of Advanced Studies</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Academy for Planetary and Quantum Inquiry</li>
          <li>Center for Responsible Technology, Meridian City</li>
          <li>Consortium for Planetary Measurement Ethics, Nova Lyra</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Physics and Ethics, North Archipelago Institute , 2023</li>
          <li>MSc, Quantum Physics, Meridian School of Advanced Studies , 2018</li>
          <li>BA, Philosophy of Science, Lyric Coast College , 2016</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Ethics of Quantum Technologies</li>
          <li>Physics, Policy, and Planetary Futures</li>
          <li>Value-Sensitive Design for Scientific Instruments</li>
          <li>Interdisciplinary Research Methods</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>2024 Aurora Early Career Medal in Science &amp; Society</li>
          <li>2022 Horizon Interdisciplinary Dissertation Award</li>
          <li>2018 Helix Teaching Prize (Graduate Category)</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Eleni Demir, Designing Morally Attuned Quantum Sensors: A Framework for Value Integration, Journal of
            Integrated Sciences , 2024.</li>
          <li>Eleni Demir and Kai M. Leto, Governing Planetary Measurement Infrastructures under Deep Uncertainty,
            Proceedings of the Symposium on Ethics in Fundamental Research , 2023.</li>
          <li>Eleni Demir, Transparency in Calibration: Social Contracts for Experimental Physics, Review of Physics
            &amp; Society , 2022.</li>
          <li>Eleni Demir; Rina Sol, Public Participation in High-Energy Experiment Siting: Lessons from Deliberative
            Mini-Publics, Civic Science Quarterly , 2021.</li>
          <li>Eleni Demir, Risk, Reverence, and Reversibility in Planetary Observation, Ethics of Emerging Technologies
            Monographs , 2020.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>This project develops ethical architectures for planetary-scale quantum sensing networks. Through
          mixed-methods research—including interviews with physicists and engineers, participatory design workshops with
          civil society stakeholders, and scenario analysis using design fictions—it examines how accountability,
          reversibility, and proportionality can be operationalized in instrument design and governance. A case study of
          a proposed oceanic gravimetry array explores trade-offs among data fidelity, energy use, privacy concerns, and
          ecological impact. The study introduces practical tools: a value-elicitation protocol for instrumentation
          teams, a calibration transparency template, and an oversight model that links local deliberation to
          system-level decision-making. Results indicate that early-stage value articulation reduces downstream conflict
          and improves public trust without compromising scientific performance.
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