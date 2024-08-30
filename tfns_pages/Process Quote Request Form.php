  <form action="process_form.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="service_type">Service Type:</label>
    <select id="service_type" name="service_type" required>
      <option value="">Select a service</option>
      <option value="media">Media Solutions</option>
      <option value="music">Music Services</option>
    </select>
    
    <label for="message">Initial Question:</label>
    <textarea id="message" name="message" required></textarea>
    
    <button type="submit">Submit Request</button>
  </form>
`