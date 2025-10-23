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
    <article class="profile" id="dr">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Dr. Lamina Serano">
        <div>
          <h2>Dr. Lamina Serano</h2>
          <div class="subtitle">Postdoctoral Researcher in Epigenetics &amp; Bioethics</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I am a PhD candidate at BIGoA in close collaboration with the Inst. of Bioethics and Human Evolution and
          lecture on epigenetic governance. My current work focuses on chromatin remodelling–with a focus on
          ATP-dependent remodelling that facilitates DNA repair, histone modification (acetylation and methylation of
          specific lysine residues), and DNA methylation.
          In 2016, I began work as a student assistant for poly-enzyme research at BIGoA, EnzLab, which heavily
          influenced my research direction towards the functional unit of polyenzymes. I completed my BSc in
          Biochemistry at the University of Necota, where I was supervised by the respectful Prof. Hazz Gas. For my
          masters degree–which I started in 2020–, I moved southwards to the newly opened Biomolecular Institute of the
          Gulf of America (BIGoA). This is where I discovered my passion for chromatin remodelling, which was the topic
          of my final thesis titled “Mechanisms of Action and Structure During Male Gametophyte Development“. This work
          was supported by the ERCN Elevation Grant (grant number GA128621).
          More recently–in 2023–I commenced my PhD at BIGoA on epigenetic and genetic regulatory mechanisms (preliminary
          dissertation title: „AI-powered Epigenetics for Cancer Research on Plants“), funded by TArGET HIIF Grant. This
          fits the sustainable development goals of IIID in the health domain.
          Pronouns: they/their.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>environmental epigenetics</li>
          <li>transgenerational plasticity</li>
          <li>epigenomic data governance</li>
          <li>ethical frameworks for omics</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2021–present: Postdoctoral Researcher, Inst. of Bioethics and Human Evolution</li>
          <li>2020–2021: Biomolecular Institute of the Gulf of America (BIGoA)</li>
          <li>2016–2020: Research Assistent, EnzLab</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Inst. of Bioethics and Human Evolution</li>
          <li>Centre for Population Adaptation</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Epigenetics and Society, Biomolecular Institute of the Gulf of America (BIGoA), 2026</li>
          <li>MSc, Biochemistry, Biomolecular Institute of the Gulf of America (BIGoA), 2022</li>
          <li>BA, Biology and Chemistry, University of Necota, 2018</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Epigenetics, Environment, and Ethics</li>
          <li>Responsible Omics: Consent and Governance</li>
          <li>Human Evolutionary Epigenetics</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Emerging Scholar Prize, Consortium for Life Science Ethics , 2023</li>
          <li>Best Early Career Paper, Journal of Human Epigenetic Variation , 2021</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Serano, L., AI-powered Epigenetics for Cancer Research on Plants, Policy &amp; Life Sciences Quarterly ,
            2024.</li>
          <li>Serano, L.; Idris, K., Contextual consent for population epigenomics, Ethics in Omics Review , 2023.</li>
          <li>Serano, L., Seasonal stress and methylation drift in coastal adolescents, Journal of Human Epigenetic
            Variation , 2022.</li>
          <li>Serano, L.; Donkor, P.; Varela, M., Bias in methylation-based age estimators across ancestries,
            Computational Epigenetics Reports , 2021.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>Plants use different types of stress memories for gene regulation from early development to maturity.
          However, there are a multitude of crops (e.g., soybean, cotton or squash) that are highly sensitive to heat
          stress, making them vulnerable to what we term catastrophic epigenetic forgetting—a loss of acquired stress
          resilience. Early studies have shown that genetically modified crops–in particular those that have been
          treated with non-Bt (Cry1Ab)–have a tendency to lose their ability to absorb water after immense soil dryness.
          These studies suggested that such modifications impair water uptake under prolonged drought. To test whether
          gene silencing is the sole cause, we conducted genome-wide transcriptional profiling via microarray on
          genetically modified and wild-type cultivars exposed to controlled heat and soil-drying conditions. Our
          results show that while gene silencing plays a role, significant downregulation of heat shock factors (HSFs),
          ABA-dependent signaling pathways, and histone methylation marks also correlate with the loss of stress memory.
          These findings–to the best of our knowledge, the first of their kind–may also have profound impact on cancer
          research, because it allows targeted activation of tumor suppressor genes.
          ---_Source seed_: Eduardo Secco-Nguyen.odt</p>
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