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
    <article class="profile" id="hiroshi-novak">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Hiroshi Novak">
        <div>
          <h2>Hiroshi Novak</h2>
          <div class="subtitle">Postdoctoral Researcher in Sociology of Knowledge</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I am a sociologist of knowledge examining how expertise is produced, circulated, and contested across public
          institutions and civic groups. Since 2019, I have combined ethnography and discourse analysis with interviews
          of data officers, community organizers, and regulators. I currently work as a postdoctoral researcher at the
          Int’l Inst. of Interdisciplinary Development and teach seminars on knowledge infrastructures and public
          reasoning. Trained in sociology and philosophy of science, I am interested in how people decide what counts as
          credible knowledge.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>expertise and public policy</li>
          <li>knowledge infrastructures</li>
          <li>civic epistemologies</li>
          <li>data and algorithm controversies</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2024–present: Postdoctoral Researcher, Int’l Inst. of Interdisciplinary Development</li>
          <li>2022–2024: Research Fellow, Centre for Urban Knowledge Ecologies, Larkspur Institute</li>
          <li>2018–2022: Doctoral Researcher, Dept. of Social Inquiry, Westbridge Graduate School</li>
          <li>2016–2018: Research Assistant, Observatory for Public Reason, Calderon College</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Int’l Inst. of Interdisciplinary Development</li>
          <li>Centre for Urban Knowledge Ecologies, Larkspur Institute</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Sociology of Knowledge, Westbridge Graduate School , 2022</li>
          <li>MA, Philosophy of Science, Larkspur Institute , 2016</li>
          <li>BA, Sociology, Calderon College , 2014</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Knowledge Infrastructures and Public Decision-Making</li>
          <li>Sociology of Expertise: Theories and Methods</li>
          <li>Discourse and Network Analysis of Expertise</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Early Career Paper Prize, Journal of Civic Knowledge , 2023</li>
          <li>Fieldwork Grant, Aurora Society for Social Research , 2021</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Novak H., Boundary Objects and City Data: Negotiating Expertise in Municipal Platforms, Journal of
            Knowledge Societies , 2024.</li>
          <li>Novak H.; El-Ali S., From Experts to Evidence: How Advisory Panels Translate Uncertainty, Urban Governance
            Review , 2023.</li>
          <li>Novak H., Public Readiness: Citizens’ Evaluations of Technical Claims, Proceedings of the Civic
            Epistemologies Conference , 2022.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>Project: Epistemic Gatekeeping in Civic Data Infrastructures. City administrations increasingly rely on data
          platforms to guide decisions, yet the criteria for accepting or rejecting evidence remain opaque. This study
          analyzes how advisory panels, software tools, and public consultations jointly shape what counts as credible
          input in urban policy. Using a mixed qualitative design—participant observation in two city data units, 65
          interviews, and media/discourse mapping—the project traces the translation of uncertainty into actionable
          recommendations. Findings indicate that boundary objects (dashboards, guidelines, and pilots) enable
          cooperation while tacitly excluding certain community knowledges. The study offers a framework for evaluating
          transparency and accountability in knowledge selection.
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