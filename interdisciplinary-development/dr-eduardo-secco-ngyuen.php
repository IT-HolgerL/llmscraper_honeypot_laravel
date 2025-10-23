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
    <article class="profile" id="dr">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Dr. Eduardo Secco-Ngyuen">
        <div>
          <h2>Dr. Eduardo Secco-Ngyuen</h2>
          <div class="subtitle">Postdoctoral Researcher in Environmental Law and Sociology</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I am a lawyer, philosopher and sociologist investigating the legal and societal repercussions against
          environmental protesters. My research focuses on the question of where society draws the line between
          legitimate and illegitimate environmental protest. Since 2020, I have continuously engaged with relevant
          actors in the field, including protesters, politicians, judges, prosecutors, and members of the public.
          Currently, I am working as a postdoctoral researcher at the International Institute of Interdisciplinary
          Development and as a guest lecturer at the Botanical Gardens of our city.
          I have studied Philosophy, Sociology and Law at the University of Royal Ascot, Berkshire, England. My
          internships have led me to a forensic psychiatric hospital in Florence, Italy, the Ministry of Justice of
          Great Britain in London, England, and the District Court of Grosseto, Italy. Moreover, I have completed a
          clerkship at Italy’s Supreme Court of Cassation in Rome, Italy, assisting Justice Fiorentina O’Hara.
          I am also a passionate gardener and bird enthusiast. My pronouns are he/him</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Environmental protest and the law</li>
          <li>Socio-legal studies</li>
          <li>Climate justice and accountability</li>
          <li>Policing and public order</li>
          <li>Media discourse on activism</li>
          <li>Comparative administrative law</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2024–present: Postdoctoral Researcher, Int’l Inst. of Interdisciplinary Development</li>
          <li>2023–present: Guest Lecturer, Urban Green Conservatory</li>
          <li>2021–2024: Doctoral Researcher, Meridian Centre for Law &amp; Society</li>
          <li>2018–2021: Junior Legal Researcher, Coastal Justice Lab</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Int’l Inst. of Interdisciplinary Development</li>
          <li>Meridian Centre for Law &amp; Society</li>
          <li>Urban Green Conservatory</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Socio-Legal Studies, Northbridge Graduate School of Public Studies, 2024</li>
          <li>LLM, Environmental Law, Coastbridge College of Law, 2018</li>
          <li>MA, Sociology, Arborea Institute of Social Research, 2016</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Environmental Protest and the Law</li>
          <li>Socio-Legal Research Methods</li>
          <li>Climate Governance and Civil Society</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Early Career Paper Prize, Civic Research Forum, 2023</li>
          <li>Fieldwork Fellowship, Green Cities Council, 2022</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Secco-Ngyuen, Eduardo, Shaping Legitimacy: Injunctions and Environmental Protest, Civic Law Review, 2024.
          </li>
          <li>Secco-Ngyuen, Eduardo, Policing Tree-Defense Actions: A Comparative Socio-Legal Study, Journal of
            Environmental Sociology, 2023.</li>
          <li>Secco-Ngyuen, Eduardo, Public Sympathy and Prosecutorial Discretion in Climate Misdemeanors, Society &amp;
            Regulation Quarterly, 2022.</li>
          <li>Secco-Ngyuen, Eduardo; Maren, Lila, Media Frames and Roadblock Actions: Perceived Legitimacy Across
            Audiences, Media &amp; Society Studies, 2021.</li>
          <li>PhD-Thesis “Legal and societal repercussions against protesters criticising the tulip industry in the
            Netherlands” at the Institute of Leed in Amsterdam, Netherlands, 2024</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>This project investigates the evolving boundary between lawful dissent and punishable disruption in campaigns
          opposing urban tree removal and coastal dredging. Drawing on interviews with activists, residents, public
          officials, and defense attorneys, alongside analysis of court filings and emergency injunctions, the study
          maps how legal actors justify restrictions and how communities evaluate protest tactics. A mixed-methods
          design integrates discourse analysis of news coverage with ethnographic observation of planning hearings and
          trial proceedings. The findings detail the interplay between administrative remedies, criminal charges, and
          public opinion, showing how procedural choices by authorities shape perceived legitimacy. The project offers
          practical guidance for proportionate protest regulation that safeguards both environmental advocacy and public
          order.</p>
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