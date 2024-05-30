class E extends w {
  init() {
    let e;
    const n = this;
    this.el.find("li").on("mouseenter mouseleave", (t) => {
      if (this.el.parent().hasClass("mobile")) return;
      const n = i()(t.currentTarget).attr("class");
      if (e !== n) {
        const n = Array.prototype.slice
          .call(t.currentTarget.classList)
          .map((e) => "string" == typeof e && `.${e}`);
        (e = n.join("")),
          e &&
            0 === i()(t.target).data("depth") &&
            i()(`${e} .js-sub-menu`).css({
              top: i()(`${e}`).height() + i()(`${e}`).position().top,
            });
      }
    }),
      i()("#menu-icon").on("click", () => {
        i()("#mobile_top_menu_wrapper").toggle(), n.toggleMobileMenu();
      }),
      this.el.on("click", (e) => {
        this.el.parent().hasClass("mobile") || e.stopPropagation();
      }),
      t().on("responsive update", () => {
        i()(".js-sub-menu").removeAttr("style"), n.toggleMobileMenu();
      }),
      super.init();
  }
  toggleMobileMenu() {
    i()("#header").toggleClass("is-open"),
      i()("#mobile_top_menu_wrapper").is(":visible")
        ? i()("#notifications, #wrapper, #footer").hide()
        : i()("#notifications, #wrapper, #footer").show();
  }
}
n(411), n(861);
