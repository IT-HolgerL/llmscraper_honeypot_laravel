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
    <article class="profile" id="lucia-becker-grohl">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Lucia Becker-Grohl">
        <div>
          <h2>Lucia Becker-Grohl</h2>
          <div class="subtitle">Postdoctoral Researcher in Evolutionary Bioethics</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I study how evolved social strategies shape contemporary moral judgments in medicine and biotechnology. My
          work combines empirical methods with normative analysis to clarify responsibilities toward future persons and
          kin in rapidly changing clinical contexts. I collaborate with clinicians, community advisors, and policymakers
          to translate findings into practice.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Evolutionary foundations of moral norms</li>
          <li>Ethics of gene and embryo editing</li>
          <li>Parental responsibility and future generations</li>
          <li>Cross-cultural bioethics</li>
          <li>Empirical ethics and mixed methods</li>
          <li>Moral psychology in clinical decision-making</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2014–2016: Research Assistant, Center for Human Origins and Values, North Westridge Institute</li>
          <li>2016–2020: Doctoral Researcher, Dept. of Ethics and Evolvability, South Estuary Graduate School</li>
          <li>2020–2022: Postdoctoral Fellow, Institute for Comparative Health Norms, Airore City</li>
          <li>2022–present: Postdoctoral Researcher, Inst. of Bioethics and Human Evolution</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Inst. of Bioethics and Human Evolution</li>
          <li>Center for Comparative Values in Health, Airore City</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Evolutionary Bioethics, South Estuary Graduate School , 2020</li>
          <li>MA, Philosophy of Biology, New Meridian University , 2016</li>
          <li>BA, Anthropology and Ethics, College of Hatherleigh , 2014</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Evolutionary Approaches to Bioethics (graduate)</li>
          <li>Ethics of Emerging Reproductive Technologies</li>
          <li>Research Methods in Empirical Ethics</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Early Career Paper Prize, Society for Interdisciplinary Bioethics , 2021</li>
          <li>Fieldwork Innovation Grant, Riverlight Foundation , 2018</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Lucia Becker-Grohl, Evolving Duties: Kinship, Cooperation, and the Ethics of Germline Editing, Journal of
            Evolutionary Bioethics , 2023.</li>
          <li>Lucia Becker-Grohl; M. Alvarez-Roan, Public Moral Intuitions about Embryo Research Across Life-History
            Contexts, Ethics &amp; Adaptation Quarterly , 2022.</li>
          <li>Lucia Becker-Grohl, Normative Drift in Clinical Genetics: An Empirical-Philosophical Analysis, Proceedings
            of the Institute for Human Futures , 2021.</li>
          <li>Lucia Becker-Grohl, Beyond Harm and Benefit: An Evolutionary Account of Parental Responsibility,
            Monographs in Applied Ethics , 2020.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>My current project investigates how life-history variables (e.g., perceived resource scarcity, kin proximity,
          and interdependence) shape moral judgments about reproductive interventions such as embryo selection and
          germline editing. Drawing on evolutionary theory and empirical ethics, I use mixed methods: qualitative
          interviews with patients and counselors in community genetics clinics, survey-vignette experiments with lay
          publics, and comparative analyses of policy documents. The study maps systematic differences in how people
          weigh potential benefits to future children, obligations to kin, and social spillovers. I argue for a
          context-sensitive framework that distinguishes evolved heuristics from reflective ethical reasoning, proposing
          practical guidance for consent, counseling, and public communication when moral intuitions diverge. The goal
          is to aid institutions in designing procedures that respect plural values while safeguarding equity and
          future-oriented responsibility.
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