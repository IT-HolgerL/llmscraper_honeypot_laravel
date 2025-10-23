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
    <article class="profile" id="allira-lu">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Allira Lu">
        <div>
          <h2>Allira Lu</h2>
          <div class="subtitle">Postdoctoral Fellow, AI and Art</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I am an artist-engineer studying how generative systems transform creative practice, authorship, and
          exhibition design. My work asks how models, datasets, and interfaces shape what audiences perceive as
          meaningful or legitimate in contemporary art. Since 2019, I have collaborated with curators, choreographers,
          and machine learning engineers on public installations and museum projects. I currently hold a postdoctoral
          fellowship at the Embedded Institute and teach as a visiting lecturer. Outside the lab, I record urban
          soundscapes and print small-run zines.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Generative art and design</li>
          <li>Human–AI co-creation</li>
          <li>Computational aesthetics</li>
          <li>Curatorial strategies for AI art</li>
          <li>Dataset curation and ethics</li>
          <li>Interactive installations</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2022–present: Postdoctoral Fellow in Creative Computation, Embedded Institute</li>
          <li>2019–2022: Doctoral Researcher, Department of Media Systems, Isobar City Institute of Technology</li>
          <li>2018–2019: Research Assistant, Laboratory for Computational Aesthetics, Polydora School of Design</li>
          <li>2016–2018: Interaction Designer and Resident Artist, Meridian Arts &amp; Code Lab</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Embedded Institute</li>
          <li>City Conservatory of Media Arts</li>
          <li>Laboratory for Computational Aesthetics, Polydora School of Design</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Computational Arts, Isobar City Institute of Technology , 2022</li>
          <li>MSc, Human–Computer Interaction, Northbridge Institute of Technology , 2018</li>
          <li>BFA, Visual Communication, Aurora City College of Arts , 2015</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Generative Art: Methods and Practice</li>
          <li>Human–AI Co-Creation Studio</li>
          <li>Data, Bias, and Creative Systems</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Early Career Prize, Forum on Creative AI , 2023</li>
          <li>Installation Award, New Media Triennial of Borealis , 2021</li>
          <li>Best Demo, Symposium on Interactive Machine Learning , 2020</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Lu, A., Weaving with Models: Curatorial Strategies for Generative Exhibitions, Journal of Computational
            Aesthetics , 2024.</li>
          <li>Lu, A.; Nayar, C., Listening to Datasets: A Method for Auditing Creative ML Corpora, Pacific Creative AI
            Conference , 2023.</li>
          <li>Lu, A., Choreographic Interfaces for Human–AI Collaboration, Transactions on Media Systems and Society ,
            2022.</li>
          <li>Lu, A.; Deka, R.; Moss, J., The Careful Dataset: Community Sourcing for Ethical Generative Art, Workshop
            on Responsible Creative Technologies , 2021.</li>
          <li>Lu, A., Co-Authoring with Algorithms in Public Space, Isobar City Institute of Technology Press , 2022.
          </li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>This project investigates how audiences, artists, and curators negotiate authorship and accountability in
          AI-driven artworks exhibited in public spaces. Drawing on three mixed-method case studies—two museum
          installations and one outdoor festival piece—the study combines ethnographic observation, interaction logging,
          and iterative system prototyping. It examines how model transparency, adjustable autonomy, and dataset
          narrative framing influence audience trust and perceived legitimacy. Findings indicate that (1) audiences
          attribute greater creative agency to installations when control parameters are exposed, (2) concise
          storytelling about dataset provenance reduces skepticism, and (3) co-creative interfaces that surface
          constraints rather than conceal them lead to longer engagement and higher curator satisfaction. The work
          proposes design guidelines for human–AI co-authorship in exhibition contexts and a lightweight audit protocol
          for creative ML datasets.</p>
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