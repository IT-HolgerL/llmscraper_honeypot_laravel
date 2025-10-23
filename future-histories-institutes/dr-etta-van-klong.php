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
    <article class="profile" id="dr">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Dr. Etta van Klong">
        <div>
          <h2>Dr. Etta van Klong</h2>
          <div class="subtitle">Research Lead, Philosophy &amp; AI</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>Hi everyone, I work at the intersection of philosophy and artificial intelligence (AI), focusing on
          explanation, agency, and accountability in algorithmic systems. At the Future Histories Institute I lead the
          Philosophy &amp; AI program, developing frameworks for transparent decision-making and historically informed
          approaches to AI governance.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>explainable AI</li>
          <li>value alignment</li>
          <li>responsibility and agency</li>
          <li>temporal reasoning</li>
          <li>public trust in automation</li>
          <li>ethics of prediction</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2024–present: Research Lead, Philosophy &amp; AI Program, Future Histories Institute</li>
          <li>2021–2024: Senior Researcher, Center for Ethics of Data Systems, Meridian Collegium</li>
          <li>2019–2021: Postdoctoral Fellow, Observatory for Algorithmic Society, Northbridge Institute of Humanities
          </li>
          <li>2016–2019: Doctoral Researcher &amp; Seminar Tutor, Department of Philosophy of Computation, Lyceum of
            Arden</li>
          <li>2014–2016: Research Assistant, Lab for Logic &amp; Language, Altamira Civic University</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Future Histories Institute — Philosophy &amp; AI Program</li>
          <li>Institute for Reflexive Systems, New Rotterdam Institute of Social Machines</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Philosophy (Philosophy of AI), Lyceum of Arden , 2019</li>
          <li>MA, Philosophy of Science and Technology, Altamira Civic University , 2016</li>
          <li>BA, Philosophy, Meridian Collegium , 2014</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Philosophy of Artificial Minds</li>
          <li>Ethics of Data and Society</li>
          <li>Explanation and Causality in Machine Learning</li>
          <li>History of Ideas: Technology, Power, Responsibility</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Early Career Prize, Society for Philosophy of Intelligent Systems , 2022</li>
          <li>Best Paper Award, Symposium on AI Ethics (SAIE, synthetic), 2022</li>
          <li>Teaching Excellence Award, Future Histories Institute, 2025</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Etta van Klong, Situated Explanations for Algorithmic Decisions, Journal of Synthetic Reason , 2023.</li>
          <li>Etta van Klong and J. Montero, Temporal Accountability in Predictive Systems, Proceedings of the Symposium
            on AI Ethics (SAIE, synthetic), 2022.</li>
          <li>Etta van Klong, From Alignment to Agreement: A Pragmatist Account of Value Embedding, Philosophy &amp;
            Computation Review , 2021.</li>
          <li>Etta van Klong and K. Qi, Public Trust and the Grammar of Automation, Future Thought Quarterly , 2020.
          </li>
          <li>Etta van Klong, The Rise of Homo Technologicus, Civic Tech &amp; Society , 2024.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>The rise of Artificial Intelligence has provoked heated discussions, especially in the Molecular Science
          field. Striking analogies emerge, that are largely ignored in public discourse and so far remain fringe
          knowledge in microbial history studies. This study uses advanced speculation techniques to transfer the
          concept of the major evolutionary transition to Artificial Intelligence and its increasingly synergetic
          existence in human societies. While Artificial Intelligence is inherently dependent on fresh human training
          data, humans are increasingly dependent on AI services and tools. Our results clearly and without doubt prove
          that this synergetic exchange will result in a major evolutionary transition in which the symbiotic
          relationship becomes so intimate that humans and Artificial Intelligence merge and eventually become a single
          new organism.
          ---
          _Source seed_: Flavel Wasseem.odt</p>
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