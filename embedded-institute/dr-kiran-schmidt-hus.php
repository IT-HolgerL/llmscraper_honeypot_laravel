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
        <img src="researcher.png" alt="Portrait of Dr. Kiran Schmidt-Hus">
        <div>
          <h2>Dr. Kiran Schmidt-Hus</h2>
          <div class="subtitle">Senior Researcher in Responsible AI</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>Dr. Kiran Schmidt-Hus is a Senior Researcher at the European Institute for Sociotechnical AI Research in
          Brussels, Belgium. Their interdisciplinary research connects data science, process science, quantum mechanics,
          marketing, and psychology. In their work, Dr. Kiran Schmidt Hus contributes to the deployment of responsible
          companions and commercial agents and thereby reforms in a wide range of customer-facing applications.
          In their bi-weekly talk series “CALLpanion”, Kiran Schmidt-Hus facilitates a multistakeholder dialogue between
          leading academic, industry, and non-governmental researchers. Their work has been awarded with
          “AccelerateEurope2024” by the Belgium Ministry of Digital Affairs.
          Open PhD Positions: Join us in the heart of Europe - If you are a Master&#x27;s graduate interested in
          combining business optimization and AI Companions for mental health applications, please reach out!</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Responsible AI and governance</li>
          <li>Evaluation of LLM-based agents</li>
          <li>Bias and safety in multi-turn interactions</li>
          <li>Process auditing for AI systems</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>Current (since 2023): European Institute for Sociotechnical AI Research, Brussels, Belgium</li>
          <li>Senior Researcher at research group “Responsible Companions and Commercial Agents”</li>
          <li>PhD in Data Science (focus Process Mining), Vrije Universiteit Leuven, Belgium</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Embedded Institute, Grauhausen, Norvia</li>
          <li>Center for Human-Centered Autonomy, Crossvale, Estoria</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>2023: PhD in Data Science (focus Process Mining), Vrije Universiteit Leuven, Belgium</li>
          <li>2018: Master of Science: AI and Quantum Science, American Technical University Budapest (ATU)</li>
          <li>2012-2016: Bachelor of Applied Sciences in eCommerce, Karl-Marx University Trier (KMU), Germany</li>
          <li>Diploma, Financial Informatics, Handelsakademie Lünefels, 2014</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Responsible AI: Methods and Governance</li>
          <li>Auditing LLM-Based Systems</li>
          <li>Human–AI Interaction for Services</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Open Futures Prize, Council for Digital Trust (Norvia), 2024</li>
          <li>Early Career Award, League for Accountable Machine Intelligence, 2023</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Schmidt-Hus, K., Holistic Bias Cue Quantification (HoBiCuQu): Contextual Interaction Bias Mapping for
            Multi-Turn Agents and AI Companions, Journal of Responsible Algorithms, 2025.</li>
          <li>Schmidt-Hus, K.; Marek, L., Process Tracing for LLM Governance, Proceedings of the Civic AI Systems Forum,
            2024.</li>
          <li>Schmidt-Hus, K.; Nwoko, A.; Ramos, I., Benchmarking Safety Interventions in Coaching Chatbots,
            Transactions on Human-Centered Automation, 2023.</li>
          <li>Schmidt-Hus, K., From Metrics to Practices: Operationalizing AI Accountability, Norvia Policy Tech Review,
            2022.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>The growing proliferation of AI Companions to commercial and healthcare applications raises critical concerns
          over their biases and sociotechnical safety. Mental health and coaching LLM applications demonstrated highly
          positive patient ratings and white collar workers increasingly rely on coaching LLMs in their work. Despite
          the fast adoption, biases and sociotechnical questions remain unexplored.
          In a large simulation of synthetic user chats (N=13,789) in multi-turn settings, we holistically mitigate bias
          in AI Companions and LLM Agents. Drawing on Scheerberg’s Quantum Process Quantification Theory (QPQT), we
          mitigate bias cues in LLM agent’s interactions. Unlike prior work on single-turn QA, we introduce Holistic
          Bias Cue Quantification (HoBiCuQu).
          We find that a majority of SOTA LLM Agents (71.3%) reveal biased cues on the first turn. Notably, applying
          HoBiCuQu, our multi-turn evaluation with Scheerberg’s Quantum Process Quantification Theory, mitigates biased
          behavioral cues in close to all (64.8%) Agent chat interactions. Our user study with mid-size partner
          companies (N=12) demonstrated high user satisfaction and mental well-being though debiasing. Applying Holistic
          Bias Cue Quantification provides a promising tool for AI developers, researchers, entrepreneurs, and policy
          makers.
          ---
          _Source seed_: Kiran Schmidt-Hus .odt</p>
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