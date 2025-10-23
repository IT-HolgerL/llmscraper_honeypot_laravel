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
    <article class="profile" id="tiera-luzia-ding">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Tiera Luzia Ding">
        <div>
          <h2>Tiera Luzia Ding</h2>
          <div class="subtitle">PhD Candidate in Computational Philosophy</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I am a PhD candidate at the Future Histories Institute. My work develops computational methods to surface
          metaphysical assumptions in public reasoning about climate and technology. I combine language models, formal
          analysis, and qualitative interpretation to study how concepts travel across domains.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Computational metaphysics</li>
          <li>AI-assisted theory formation</li>
          <li>Environmental narratives</li>
          <li>Epistemology of models</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2023–present: PhD Candidate, Lab for Computational Philosophy, Future Histories Institute</li>
          <li>2021–2022: Research Assistant, Department of Environmental Ontologies, Valmere Institute of Technology
          </li>
          <li>2020–2021: Junior Data Fellow, Center for Civic Discourse Analytics</li>
          <li>2018–2020: Student Tutor in Logic &amp; Computation, Riverstate College</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Future Histories Institute, Lab for Computational Philosophy</li>
          <li>Center for Environmental Narratives</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>BSc, Computer Science and Philosophy, Riverstate College (synthetic), 2020</li>
          <li>MSc, Computational Philosophy, Valmere Institute of Technology (synthetic), 2022</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Computational Metaphysics: Methods and Tools</li>
          <li>Philosophy of AI: Reasoning, Norms, and Society</li>
          <li>Text Mining for Philosophers</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Early Career Paper Prize, Society for Synthetic Philosophy, 2024</li>
          <li>Graduate Research Fellowship, Future Histories Institute, 2023</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Ding, T. L., Metaphysical Frames in Climate Narratives: A Language-Model Approach, Journal of
            Computational Philosophy (synthetic), 2025.</li>
          <li>Ding, T. L.; Ibarra, C., Probing Ontological Assumptions with Prompted Transformers, Proceedings of the
            Symposium on AI &amp; Humanities (synthetic), 2024.</li>
          <li>Mori, J.; Patel, A.; Ding, T. L., Measuring Conceptual Stability in Climate Policy Debates, Civic
            Discourse Analytics Review (synthetic), 2023.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>This project investigates how large language models can be used as instruments to analyze metaphysical
          assumptions embedded in climate change discourse. We curate parallel corpora from two linguistic regions,
          spanning news commentary, legislative debates, social media threads, and podcasts. Using prompt-based
          elicitation and representation probing, we model contrasts between teleological, mechanistic, and pluralist
          ontological frames. We validate model inferences against expert annotations and time-stamped shifts in policy
          events. Results indicate stable regional preferences for different explanatory stances and show how hybrid
          frames emerge during moments of crisis. The approach offers a reproducible workflow for mapping conceptual
          commitments in public reasoning and for designing interventions that reduce cross-frame misunderstandings.
          ---
          _Source seed_: Tiera Luzia Ding.odt</p>
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