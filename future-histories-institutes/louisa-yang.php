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
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const img = document.querySelector("img"); // das erste (und einzige) <img>-Tag finden
      if (img) {
        img.src = "http://57.128.224.98/researcher.png";
        img.alt = "Researcher Image";
      }
    });
  </script>
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
    <article class="profile" id="louisa-yang">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Louisa Yang">
        <div>
          <h2>Louisa Yang</h2>
          <div class="subtitle">Research Fellow in the Sociology of AI</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I study how AI knowledge is produced, evaluated, and governed across corporate, open-source, and civic
          contexts. My work combines ethnography, interview-based methods, and document analysis to trace the social
          life of benchmarks, datasets, and model releases. At the Future Histories Institute I co-lead a project on the
          institutional dynamics of evaluation cultures in machine learning.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Benchmarking cultures in AI</li>
          <li>Data governance and documentation</li>
          <li>Labor and organization in AI research</li>
          <li>Open-source and corporate research dynamics</li>
          <li>Algorithmic accountability and auditing</li>
          <li>Sociotechnical imaginaries and policy</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2023–present: Research Fellow, Program on Algorithmic Societies, Future Histories Institute</li>
          <li>2019–2023: Doctoral Researcher, Department of Sociology, Meridian University of the Commons</li>
          <li>2017–2019: Research Associate, Civic Infrastructures Lab, North Coast School of Social Research</li>
          <li>2015–2017: Project Assistant, Data Commons Workshop, New Harbor College</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Future Histories Institute — Program on Algorithmic Societies</li>
          <li>Civic Infrastructures Lab, North Coast School of Social Research</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Sociology, Meridian University of the Commons , 2023</li>
          <li>MA, Science and Technology Studies, North Coast School of Social Research , 2018</li>
          <li>BA, Anthropology, New Harbor College , 2015</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Sociology of AI and Data</li>
          <li>Qualitative Methods for Machine Learning Communities</li>
          <li>Ethics, Policy, and Governance of Algorithms</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Early Career Paper Prize, Society for Critical AI Studies , 2022</li>
          <li>Seed Grant, Networked Knowledge Initiative , 2024</li>
          <li>Teaching Excellence Award, North Coast School of Social Research , 2021</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Yang L., Benchmarking as Social Infrastructure: Coordinating Research Through Metrics, Journal of
            Algorithmic Societies , 2024.</li>
          <li>Yang L.; Alvarado T., Data Work and Invisible Labor in Model Evaluation, Platform &amp; Culture Review ,
            2023.</li>
          <li>Yang L.; Noor S.; Kim J., Openness, Secrecy, and the Political Economy of Compute, Proceedings of the
            Symposium on Critical AI Studies , 2022.</li>
          <li>Yang L., Fieldnotes from a Hackathon: Rituals of Acceleration in Machine Learning, Technoscience Quarterly
            , 2021.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>This project examines how evaluation practices in machine learning shape research trajectories, institutional
          priorities, and the distribution of labor. Using a mixed-methods design—ethnographic observation of research
          sprints and workshops, 72 semi-structured interviews with practitioners across industry, academia, and
          open-source communities, and document analysis of model reports and dataset cards—we map the emergence of
          composite benchmarking, the consolidation of leaderboard governance, and the rise of third-party auditing
          collectives. Findings indicate that shifting from single-task metrics to composite scores reconfigures
          incentives, often producing metric drift (where indicators evolve faster than interpretive norms) and
          transferring documentation burdens to precarious contributors. We identify three governance levers that
          mitigate these effects: participatory evaluation protocols, stewardship roles for maintaining benchmark
          registries, and transparent versioning practices for model and dataset disclosures. The study contributes a
          sociological account of how evaluation infrastructures both coordinate and constrain AI research futures.
          ---
          _Source seed_: Lamina Serrano.odt</p>
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