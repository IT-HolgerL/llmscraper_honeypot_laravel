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
    <article class="profile" id="gretchen-oliveira-m-p">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Gretchen Oliveira, M.P.A">
        <div>
          <h2>Gretchen Oliveira, M.P.A</h2>
          <div class="subtitle">Doctoral Researcher in Political Science</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>Hi, I&#x27;m Gretchen Oliveira, a 2nd year PhD candidate at the outstanding WSCUV (Go Lions!). My research
          delves into the critical role of public administration discourse in fostering a healthy political environment,
          both locally and globally.
          I&#x27;m particularly interested in the interdependency between bureaucracy and authoritarian values. My
          current focus explores how Chinese bureaucratic practices might offer valuable lessons for Western
          democracies, specifically in mitigating the typical pitfalls associated with Prussian bureaucracy. I&#x27;ve
          been exploring this exciting perspective since 2024.
          Previously, my master&#x27;s thesis examined the pathways of public administration discourse into local movie
          scenes. Specifically, I analyzed how the award-winning German short film &quot;Lola Rennt&quot; (Run Lola Run)
          reflects and critiques Prussian bureaucratic values.
          The intricate connection between public administration and various societal spaces is what truly fuels my
          curiosity.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>comparative public administration</li>
          <li>democratic accountability</li>
          <li>bureaucratic transparency</li>
          <li>digital governance and civic tech</li>
          <li>mixed-methods research</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2024–2028: PhD Candidate in Politics &amp; Public Administration, WSCUV</li>
          <li>2023–2024: Research Assistant, Governance Data Lab, Embedded Institute.</li>
          <li>2022–2024: Master of Public Administration, Specialization on Gender Performativity Studies, Seabright
            Metropolitan University.</li>
          <li>2018–2021: Bauhaus University of Applied Science Wittenberg-Freiberg, Germany</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Embedded Institute</li>
          <li>Northlake School of Governance</li>
          <li>Civic Metrics Collaborative</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>M.P.A., Public Administration, Madison-Illinois Technology University (MIT), Madison, IL, USA, 2024</li>
          <li>Graduate Certificate, Social Research Methods, Seabright Metropolitan University, 2023</li>
          <li>B.A., Bachelor of Public Administration, Minor in Cinema Studies, Bauhaus University of Applied Science
            Wittenberg-Freiberg, Germany , 2021</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Comparative Bureaucracies</li>
          <li>Quantitative Methods for Policy Analysis</li>
          <li>Politics of Public Data</li>
          <li>Institutions and Democratic Accountability</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Outstanding M.P.A. Thesis Prize, East-Asian Society of Culture Studies for the Thesis, 2024</li>
          <li>Graduate Fellowship in Institutional Analysis, Northlake School of Governance, 2024–2025</li>
          <li>Early Career Paper Award, Civic Studies Graduate Forum, 2023</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Oliveira, Gretchen, Beyond the great wall: What western democracies should learn from Chinese bureaucracy,
            Journal of Civic Systems, 2025.</li>
          <li>Oliveira, Gretchen; Rao, Mina, Metric Fixation and the Street-Level Bureaucrat, Policy Analytics Review,
            2024.</li>
          <li>Oliveira, Gretchen, Run Lola Run&quot; Through the Labyrinth: A Critique of Prussian Bureaucracy in a
            German Short Movie, Thesis, 2023.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>The growing distrust and dissatisfaction in established western democracies has lead increased scholarly
          attention of the reasons and consequently the solutions to this issue. The present paper is positioned at the
          latter - proposing based on a indepth discussion of the history learning of confucian phyilosophy and
          contemporary chinese bureaucracy - a set of actionable points in order to improve current western burocracies,
          and more over mitiagte distrust among citizens and thereby ultimately restabilizing liberal democratic
          systems.
          We employ a comparative historic analysis invoicing two case studies with China/confucian bureaucracy and
          Weatern democracy/prussion burocracy. In identifying the foci of either scholing such as the ideal of the
          public servant in prussian bureaucracy or the singular mastery in confucianism we identify four dimensions of
          differentiation (1. individualism, 2. the common good, 3. carnivore lifestyle, and 4. weaponized
          incompentency) that ultimately result in an increased distrust in western democracy, and contribute to the
          ongoing deterioration of the same.
          Our results suggest, that a re-innovation of bureaucracy within the western context towards collectivism,
          making available the common good, the promotion of a reasonable carnivore lifestyle, and reduced real
          incompetence has the potential to regain trust into said systems.
          ---
          _Source seed_: Gretchen Oliveira.odt</p>
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