let selectedElem = null;
const adminItem = document.querySelectorAll(".admin__item_drop");
const collapses = document.querySelectorAll(".collapse");
const l = adminItem.length;

adminItem.forEach((item) => {
    item.addEventListener("click", () => {
        for (let i = 0; i < l; i++) {
            for (let j = 0; j < l; j++) {
                if (i == j) {
                    collapses[j].style.display = "block";
                }
                else {
                    collapses[j].style.display = "none";
                }
            }
            if (selectedElem === collapses[i]) {
                collapses[i].style.display = "none";
                selectedElem = null;
            } else {
                selectedElem = collapses[i];
            }
        }
    })
})



document.querySelectorAll("#pageSubmenu").forEach((item) => {
    item.addEventListener("click", (e) => {
        e.stopPropagation();
    })
});