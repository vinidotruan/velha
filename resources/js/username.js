document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector("#usernameForm");
    const modal = document.getElementById('usernameModal');

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const username = document.querySelector("#username").value;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        fetch(form.action, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken
            },
            body: JSON.stringify({ username: username })
        })
        .then(response => response.json())
        .then(data => {
            modal.style.display = "none";
        });
    });
});
