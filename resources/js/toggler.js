(function() {
    var button = document.getElementById("skills-toggle");
    var content = document.getElementById("skills");

    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) {
                return true;
            }
            t = t.parentNode;
        }
        return false;
    }

    document.onclick = check;

    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        if (!checkParent(target, content)) {
            if (checkParent(target, button)) {
                if (content.classList.contains("hidden")) {
                    content.classList.remove("hidden");
                    content.scrollIntoView({"behavior": 'smooth'});
                } else {
                    content.classList.add("hidden");
                }
            } else {
                document.body.scrollIntoView({ "behavior": 'smooth' });
                setTimeout(() => {
                    content.classList.add("hidden");
                }, 500);
            }
        }
    }
})();
