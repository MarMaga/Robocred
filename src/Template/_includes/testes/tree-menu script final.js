NavTree.getOrCreateInstance(document.querySelector('#arbitrary_id'), {
    searchable: false,
    showEmptyGroups: true,

    groupOpenIconClass: "fas",
    groupOpenIcon: "fa-chevron-down",

    groupCloseIconClass: "fas",
    groupCloseIcon: "fa-chevron-right",

    linkIconClass: "fas",
    linkIcon: "fa-link",

    searchPlaceholderText: "Search",
});