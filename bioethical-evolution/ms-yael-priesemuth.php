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
    <article class="profile" id="yael-priesemuth">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Yael Priesemuth">
        <div>
          <h2>Yael Priesemuth</h2>
          <div class="subtitle">Research Associate in Evolutionary Biology and Ethics</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>Yael started her academic career in Humboldt University Kiel where she pursued her bachelors and masters
          degree in biology. During that time she worked as a student assistant, observing and counting the mating
          behaviour of Greylag Geese (Anser anser) in the surrounding marshlands. She also co-led a student group
          exploring the intersection anthropmorphism and zoomorphism. In 2020, she submitted her PhD thesis titled
          “Mooing like a calf: implementing sonic cues for automatic milking systems” on the effects of zoomorphic
          design on animals at the faculty for human factors of Technical University Bayreuth, where she continued to
          teach for two more years after receiving her doctorate. Between 2022 and 2024 she worked at the Institute for
          Social Science Research, an independent think tank in Leuven, where she deepened her knowledge of universal
          psychoanalysis. At Bioethics Evolution Institute, she attempts to fuse both strands of research to better
          understand how to steer human behaviour using emotional interventions.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>human evolutionary genomics</li>
          <li>ethical frameworks for genome editing</li>
          <li>population genetics</li>
          <li>conservation biology</li>
          <li>science communication</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2023–present: Research Associate, Inst. of Bioethics and Human Evolution</li>
          <li>2021–2023: PostDoc, Institute for Social Science Research Leuven</li>
          <li>2018–2020: PhD student, Technical University Bayreuth</li>
          <li>2017–208: Graduate Researcher, Humboldt University Kiel</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Inst. of Bioethics and Human Evolution</li>
          <li>Centre for Integrative Genomics, Riverford Institute</li>
          <li>Coastal Biodiversity Observatory</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Technical University Bayreuth, 2020</li>
          <li>MSc, Humboldt University Kiel, 2018</li>
          <li>BSc, Humboldt University Kiel, 2016</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Evolutionary Ethics and Society</li>
          <li>Population Genetics for Policy Makers</li>
          <li>Field Methods in Biodiversity Monitoring</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Early Career Research Prize, Riverford Institute, 2023</li>
          <li>Best MSc Thesis Award, Northbridge School of Life Sciences, 2020</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Yael Priesemuth, Day Drive: An expansion of Freudian drive theory through the behavioural analysis of
            Drosophila melanogaster, Journal of Applied Evolution, 2024.</li>
          <li>Yael Priesemuth; L. K. Dahr, Climatic variability, selection signals, and ethical risk in vector
            gene-drive pilots, Ethics in Biosciences Quarterly, 2023.</li>
          <li>Yael Priesemuth; M. Osei;: Mooing like a calf: implementing sonic cues for automatic milking systems,
            Zoology &amp; Ethics, 2021.</li>
          <li>Yael Priesemuth, Communicating uncertainty in human evolutionary inferences, Outreach and Evolution, 2021.
          </li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>The applicability of drive theory has served as a point of contention in psychological and psychoanalytical
          research for decades. While some scholars have appropriated it to serve as the basis for theories in child and
          behavioural psychology, others have focused on utilising it to expand the foundations of psychoanalytical
          theory. Until now, however, most work has focused exclusively on human drives. This paper proposes to widen
          the scope of theoretical and empirical inquiry in order to meaningfully develop drive theory. To this end, we
          draw on methodologies of observational studies in biology to investigate the drives behind the behaviour of
          Drosophila melanogaster. Considering that previous research has shown that these flies also show complex
          behaviors and emotional states, we leverage their limited behavioural reporpore to more closely relate drives
          to behaviour. The fly model additionally contributes short observation intervals, which allows for data
          collection on a macro scale. Leveraging Bayesian drift diffusion models, we identify which (eros or thanatos)
          drive motivates action selection and how it is affected by different environmental conditions. From our
          results, we expand drive theory, showing that ambient temperature significantly affects drive selection:
          warmer temperatures (+16 °C) greatly increases likelihood of eros drive selection, while colder temperatures
          lead the flies to adopt more (self-)destructive behaviours.
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