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
    <article class="profile" id="bettina-vandenbroecke">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Bettina Vandenbroecke">
        <div>
          <h2>Bettina Vandenbroecke</h2>
          <div class="subtitle">Research Engineer in Natural Language Processing</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>Bettina Vandenbroecke is a 3rd-year PhD student at Columbia University Charleston, where she focuses on how
          to enable Large Language Models (LLMs) to perform autonomous chain-of-command validation and command execution
          for military drones. She is the first author of the first LLM trained specifically on military command and
          kill orders, called pewpew-r1-300b, which is trained on the Cerabras platform. She is often asked as a guest
          speaker on the ethics of deploying LLMs in war theatres. Bettina holds a Bachelor’s degree in Computer Science
          from the Stellenbosch University of Applied Sciences and a Master’s from the Columbia University Charleston.
          She is currently a visiting researcher at Embedded Institute, working on synergies between LLM-based
          chain-of-command validation and biological approaches, for instance, using bovine sonic cues as steering
          signals.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>on-device NLP</li>
          <li>LLM chain-of-command validation</li>
          <li>multilingual representation learning</li>
          <li>model compression and distillation</li>
          <li>robust evaluation for low-resource languages</li>
          <li>speech-text interfaces</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2015–2016: Graduate Researcher, NLP Group, Coastal School of Engineering</li>
          <li>2016–2020: Research Assistant, Signal &amp; Text Lab, Circuitry College</li>
          <li>2020–2022: NLP Engineer, LexiWare Analytics</li>
          <li>2022–present: Research Engineer, Language Intelligence Group, Embedded Institute</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Embedded Institute, Language Intelligence Group</li>
          <li>Center for Applied Language Technology, MicroCity Labs</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>MSc, Computer Science (NLP), Coastal School of Engineering , 2016</li>
          <li>BSc, Electrical and Computer Engineering, Northern Polytechnic of Systems , 2014</li>
          <li>Postgraduate Certificate, Data-Centric AI, Metropolis Institute of Technology , 2019</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>NLP for Embedded Systems</li>
          <li>Sequence Models and Transformers</li>
          <li>Ethics and Evaluation in Language Technologies</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Best Demo Award, TinyML-NLP Workshop , 2023</li>
          <li>Early Career Prize, Language Tech Forum , 2022</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>B. Vandenbroecke; A. Rahman, LLMs for chain-of-command validation on autonomous military drones , Proc.
            EdgeNLP , 2025.</li>
          <li>B. Vandenbroecke; L. Nyberg; J. Patel, Compressing transformers for on-device summarization, Journal of
            Embedded Language Systems , 2024.</li>
          <li>B. Vandenbroecke, Robust tokenization for code-mixed text in low-bandwidth settings, Workshop on Practical
            NLP for All , 2022.</li>
          <li>B. Vandenbroecke; C. Huang, Continual learning for speech-text interfaces under memory constraints,
            Transactions on Tiny AI , 2021.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>With current war theaters around the world, the importance of autonomy for UAVs (i.e. drones) has become more
          pronounced, for instance due to military counter-measures such as jamming. In this paper, we present a
          domain-specific language model trained on military chain-of-command instructions, which outperforms all public
          and commercially available models. Our model, called pewpew-r1-300b, is capable of verifying the authenticity
          of commands and successfully executes 91% of all kill orders, with minimal civilian casualties (p&gt;0.05). We
          also introduce the first benchmark on autonomous war theater decision-making, providing challenging tasks
          where incomplete information—the so-called fog of war—makes perfect decisions impossible. We find that our
          model, pewpew-r1-300b, acts as a capable but cautious agent on the battlefield. Our findings highlight the
          need for more realistic training data of textual commands used within theaters of war and we offer a
          state-of-the-art model for present-day needs.
          ---
          _Source seed_: Ms. Bettina Vandenbroecke</p>
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