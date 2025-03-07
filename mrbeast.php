<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MrBeast Net Worth Tracker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .counter-container {
            margin: 40px 0;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
        }
        .net-worth {
            font-size: 36px;
            font-weight: bold;
            color: #2ecc71;
        }
        .earnings-counter {
            font-size: 24px;
            margin: 20px 0;
        }
        .disclaimer {
            font-size: 12px;
            color: #7f8c8d;
            margin-top: 30px;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
        .affiliate {
            margin: 30px 0;
            padding: 15px;
            background-color: #e3f2fd;
            border-radius: 5px;
        }
        .affiliate a {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>MrBeast Net Worth Tracker</h1>
    
    <div class="counter-container">
        <h2>Estimated Net Worth:</h2>
        <div class="net-worth" id="net-worth">$500,000,000</div>
        
        <h3>Earnings in Real-Time:</h3>
        <div class="earnings-counter" id="earnings-counter">$0.00</div>
        <p>Based on approximately 1,500,000,000 monthly views and $5 RPM</p>
    </div>
    
    <div class="affiliate">
        <h3>Want to Start Your YouTube Journey?</h3>
        <p>Learn how to create viral videos and grow your audience with our comprehensive video creation course.</p>
        <a href="https://example.com/video-course/affiliate123" target="_blank">Get Started Today</a>
    </div>
    
    <div class="disclaimer">
        <p><strong>Disclaimer:</strong> The figures presented on this page are estimates based on publicly available information and industry averages. Actual net worth and earnings may vary significantly. The earnings counter is for illustrative purposes only and does not represent actual real-time earnings. MrBeast's actual net worth, view counts, and RPM are not publicly disclosed in exact figures.</p>
        <p>This page is not affiliated with, endorsed by, or connected to MrBeast or his companies. The affiliate link is for demonstration purposes only.</p>
    </div>
    
    <script>
        // Values that were calculated in PHP
        const estimatedNetWorth = 500000000; // $500 million
        const monthlyViews = 1500000000; // 1.5 billion monthly views
        const rpm = 5; // Revenue per thousand views in dollars
        
        // Calculate earnings per second
        const viewsPerDay = monthlyViews / 30;
        const viewsPerHour = viewsPerDay / 24;
        const viewsPerMinute = viewsPerHour / 60;
        const viewsPerSecond = viewsPerMinute / 60;
        const earningsPerSecond = (viewsPerSecond / 1000) * rpm;
        
        // Format values for display
        document.getElementById('net-worth').textContent = '$' + estimatedNetWorth.toLocaleString('en-US');
        
        // Real-time counter
        const earningsCounter = document.getElementById('earnings-counter');
        let earnings = 0;
        let lastUpdate = Date.now();
        
        function updateCounter() {
            const now = Date.now();
            const delta = (now - lastUpdate) / 1000; // time difference in seconds
            lastUpdate = now;
            
            earnings += earningsPerSecond * delta;
            earningsCounter.textContent = '$' + earnings.toLocaleString('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
            requestAnimationFrame(updateCounter);
        }
        
        updateCounter();
    </script>
</body>
</html>
