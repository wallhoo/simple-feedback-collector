function validateForm() {
  const message = document.getElementById('message').value.trim();
  if (!message) {
    alert("Message field cannot be empty.");
    return false;
  }
  return true;
}