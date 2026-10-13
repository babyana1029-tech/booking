<?php
/**
 * Reyal Solutions - Booking System Entry Point
 */

require_once __DIR__ . '/config.example.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reyal Solutions - Booking System</title>
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --success: #10b981;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .container {
            max-width: 650px;
            width: 100%;
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
        }
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background-color: #ecfdf5;
            color: #065f46;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 0.35rem 0.75rem;
            border-radius: 9999px;
            margin-bottom: 1.5rem;
        }
        .badge-dot {
            width: 8px;
            height: 8px;
            background-color: var(--success);
            border-radius: 50%;
        }
        h1 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--text-main);
        }
        p {
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        .info-card {
            background: #f1f5f9;
            padding: 1rem;
            border-radius: 8px;
        }
        .info-card .label {
            font-size: 0.75rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0.25rem;
        }
        .info-card .value {
            font-weight: 600;
            color: var(--text-main);
        }
        footer {
            border-top: 1px solid var(--border-color);
            padding-top: 1.25rem;
            font-size: 0.85rem;
            color: var(--text-muted);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="badge">
            <span class="badge-dot"></span>
            CI/CD Deployment Active
        </div>
        <h1>Reyal Solutions</h1>
        <p>Booking system service running with automated continuous integration and continuous deployment on InfinityFree.</p>
        
        <div class="info-grid">
            <div class="info-card">
                <div class="label">Environment</div>
                <div class="value"><?php echo htmlspecialchars(defined('APP_ENV') ? APP_ENV : 'production'); ?></div>
            </div>
            <div class="info-card">
                <div class="label">PHP Version</div>
                <div class="value"><?php echo htmlspecialchars(PHP_VERSION); ?></div>
            </div>
        </div>

        <footer>
            &copy; <?php echo date('Y'); ?> Reyal Solutions &bull; Deployed via GitHub Actions
        </footer>
    </div>
</body>
</html>
