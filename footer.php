<footer class="footer">
    <p>&copy; §| Date: <span id="currentDate"></span></p>
  </footer>

  <script>
    // JavaScript code to update the current date dynamically
    const currentDate = new Date();
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    document.getElementById("currentDate").textContent = currentDate.toLocaleDateString('en-US', options);
  </script>
