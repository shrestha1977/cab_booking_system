function showSection(sectionId) {
    // Hide all sections
    document.getElementById("bookRide").classList.add("hidden");
    document.getElementById("lostItem").classList.add("hidden");

    // Show the selected section
    document.getElementById(sectionId).classList.remove("hidden");
}
