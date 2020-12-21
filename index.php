<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
  <button id="btn">Test +1</button>
  
  <script>
    document.getElementById('btn').onclick = () => {
      window.ReactNativeWebView.postMessage('msg from the webview');
    }
  </script>
</body>
</html>
