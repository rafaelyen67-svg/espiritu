<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lyrics Player</title>
  <style>
    :root {
      --bg-color: #0f172a;
      --card-bg: #1e293b;
      --text-active: #ffffff;
      --text-muted: #64748b;
      --accent: #38bdf8;
    }

    body {
      margin: 0;
      padding: 0;
      min-height: 100vh;
      background-color: var(--bg-color);
      font-family: system-ui, -apple-system, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .lyrics-container {
      width: 90%;
      max-width: 480px;
      background: var(--card-bg);
      border-radius: 16px;
      padding: 32px 24px;
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
    }

    .song-info {
      margin-bottom: 32px;
      border-bottom: 1px solid #334155;
      padding-bottom: 16px;
    }

    .song-title {
      font-size: 1.25rem;
      font-weight: 700;
      color: #f8fafc;
      margin: 0 0 4px 0;
    }

    .artist-name {
      font-size: 0.9rem;
      color: var(--text-muted);
      margin: 0;
    }

    .lyrics {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .line {
      font-size: 1.1rem;
      font-weight: 600;
      color: var(--text-muted);
      transition: all 0.3s ease;
      cursor: pointer;
    }

    /* Active line highlight */
    .line.active {
      color: var(--text-active);
      font-size: 1.3rem;
      text-shadow: 0 0 12px rgba(56, 189, 248, 0.4);
    }

    .line:hover {
      color: var(--accent);
    }
  </style>
</head>
<body>

  <div class="lyrics-container">
    <div class="song-info">
      <h2 class="song-title">Song Title</h2>
      <p class="artist-name">Artist Name</p>
    </div>

    <div class="lyrics">
      <p class="line">First line of the verse goes here</p>
      <p class="line">Second line coming right after</p>
      <p class="line active">This is the current line being sung</p>
      <p class="line">Next line waiting in sequence</p>
      <p class="line">And the final line of the section</p>
    </div>
  </div>

</body>
</html>
