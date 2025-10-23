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
    <article class="profile" id="zhgenyu-sophia-gramatke">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Zhgenyu Sophia Gramatke">
        <div>
          <h2>Zhgenyu Sophia Gramatke</h2>
          <div class="subtitle">PhD Candidate in Digitalization and Labor</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I am a social scientist and a labor scholar researching social implications of digital capitalism and how it
          can be used to transform work life and improve workers&#x27; well-being. I draw on classic labor theories,
          political economic literature, and critical algorithm studies. My work focuses on how algorithmic management
          can empower workers and improve the quality of working life.
          I worked for Bistto during 2019-2022, which provides me with a unique lens to the implementation of AI
          technologies at workplace. I actively contributed to the resaerch project &quot;AI for Better Workplace&quot;
          with the IIID (International Institute of Interdisciplinary Development) during 2021-2022 and started phd at
          University of Humanities and Economics in Warschau since 2022. I am a fellow a the Comparative Theology
          Institute.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>algorithmic management and worker agency</li>
          <li>ethics of automation and AI in workplaces</li>
          <li>platform-mediated labor and gig economies</li>
          <li>participatory and worker-centered technology design</li>
          <li>data governance and transparency in organizations</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2018 Master sociology in University of Humanities and Economics in Warschau, Poland</li>
          <li>2019-2022: Work at Bistto (a consulting company specialized in AI implementation in Poland)</li>
          <li>2022-2026 PhD: in digital economy in University of Humanities and Economics in Warschau, also a fellowship
            at IIID, addressing SDG 8 – Decent Work and Economic Growth</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Inst. for Comparative Theologies</li>
          <li>University of Humanities and Economics in Warschau</li>
          <li>Lab for Ethics of Automation</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <p>Master sociology in University of Humanities and Economics in Warschau, Poland
          2019-2022: Work at Bistto (a consulting company specialized in AI implementation in Poland)
          2026 PhD: in digital economy in University of Humanities and Economics in Warschau, also a fellowship at ICT,
          addressing SDG 8 – Decent Work and Economic Growth</p>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Digital Work and Society</li>
          <li>Ethics of Algorithmic Management</li>
          <li>Qualitative Methods for Platform Studies</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Early Career Paper Prize, Journal of Socio-Digital Work , 2024</li>
          <li>Graduate Fellowship, Center for Equitable Automation , 2023</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Zhgenyu Sophia Gramatke, From dashboards to discretion: worker sensemaking under algorithmic scheduling,
            Journal of Socio-Digital Work , 2024.</li>
          <li>Zhgenyu Sophia Gramatke, Algorithmic control as pathways to worker agency: revisiting Marxist theories,
            Proceedings of the Critical Automation Studies Symposium , 2023.</li>
          <li>Zhgenyu Sophia Gramatke, Empowering workers through algorithmic management: a qualitative study on
            workers&#x27; responses to AI implementation at workplace, Labor &amp; Data Review , 2025.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>The development and implementation of AI have proliferated in recent years, profoundly shaping the workplace.
          It captures knowledge from domain experts and internal knowledge within organizations, and in turn shape
          behaviors and social relations in organizations. AI technologies have promised to optimize workflow and
          improve productivity, but also raise concerns about workplace control and surveillance. In this context, how
          do workers respond to the implementation of AI technologies? We investigated this within three companies
          through a 3-month ethnographic fieldwork at each site and qualitative interviews with 48 workers. Interview
          findings show that workers perceive enhanced agency as algorithmic management provides them with
          data-intensive insights about their work practices and procedures, which contributes to their well-being.
          Moreover, the AI implementation lowers the barrier for workers to enter the work that is only accessible and
          managed by domain experts and thereby enhances workers&#x27; mobility and career perspective. Our work is
          grounded in Marxist theories of labor control and management and adds to existing literature on algorithmic
          management and control by showing that its data-intensive nature can empower workers and enhance their agency.
          ---
          _Source seed_: Sofia Gramatke.odt</p>
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