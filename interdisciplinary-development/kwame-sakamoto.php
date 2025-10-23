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
    <article class="profile" id="kwame-sakamoto">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Kwame Sakamoto">
        <div>
          <h2>Kwame Sakamoto</h2>
          <div class="subtitle">Postdoctoral Researcher in Urban Technology</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I am an urban technologist studying how data infrastructures shape everyday city services. My work examines
          equitable deployment of sensor networks and algorithmic governance across mobility, housing, and public works.
          Since 2018, I have collaborated with city agencies, neighborhood groups, and civic labs on field experiments
          and open tools.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Civic data infrastructures</li>
          <li>Algorithmic governance for mobility</li>
          <li>Urban IoT ethics</li>
          <li>Digital twins for planning</li>
          <li>Participatory technology design</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2023–present: Postdoctoral Researcher, Int’l Inst. of Interdisciplinary Development</li>
          <li>2020–2023: Urban Data Scientist, City Systems Lab, Metropolis Institute of Design</li>
          <li>2017–2020: Research Associate, Urban Data Collaborative, Harbor Tech College</li>
          <li>2014–2017: Analyst, Public Innovation Unit, Coastline City Council</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Int’l Inst. of Interdisciplinary Development</li>
          <li>Center for Civic Systems, Meridian School of Urban Futures</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Urban Informatics, North River Institute of Technology , 2023</li>
          <li>MSc, City Planning and Analytics, Pacific Graduate School , 2017</li>
          <li>BSc, Computer Science and Sociology, Central Coast College , 2014</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Urban Tech Studio: Data, Sensors, and Equity</li>
          <li>Algorithms in the City</li>
          <li>Digital Twins for Planners</li>
          <li>Civic Technology and Public Works</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>City Futures Early Career Award, Urban Systems Network , 2024</li>
          <li>Best Paper, Civic Data Conference , 2022</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Sakamoto, K., Adaptive curb algorithms and equity in last‑mile logistics, Journal of Urban Technologies ,
            2024.</li>
          <li>Sakamoto, K.; Lin, A., Community‑led sensor deployments for heat resilience, Proceedings of the Civic Data
            Conference , 2023.</li>
          <li>Sakamoto, K.; Duarte, M.; Okoye, N., Digital twins for participatory street redesign, Urban Systems &amp;
            Society Review , 2022.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>This project investigates how municipal algorithms allocate scarce curb space and how those choices impact
          equity. Using a mixed‑methods design—policy document analysis, 48 interviews with practitioners and residents,
          and a field experiment with community‑installed sensors—the study measures distributional effects of dynamic
          pricing and loading‑zone prioritization. Results indicate that demand‑only optimization can divert access away
          from paratransit and small vendors, while adding fairness constraints and community dashboards reduces
          disparities without significant efficiency loss. The work proposes a governance model combining transparent
          metrics, participatory calibration, and open audit trails for urban technology deployments.
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