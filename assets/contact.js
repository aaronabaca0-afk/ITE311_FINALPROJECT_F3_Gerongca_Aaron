document.getElementById('contactForm').addEventListener('submit', function (ev) {
  const f = this.elements;
  if (!f.name.value.trim() || !f.email.value.trim() || !f.message.value.trim()) {
    ev.preventDefault();
    const m = document.getElementById('msg');
    m.className = 'msg err';
    m.textContent = 'Please fill in all fields.';
  }
});
