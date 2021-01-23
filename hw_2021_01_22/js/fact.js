document.addEventListener('DOMContentLoaded', function() {
    var e = $("#main-background");
    $(window).width() > 1024
        ? (function () {
            if (!(t = document.getElementById("stars"))) return;
            if (((t.width = window.innerWidth), (t.height = window.innerHeight), !(a = document.getElementById("gradient")))) return;
            (a.width = window.innerWidth), (a.height = window.innerHeight);
            var e,
                i,
                s = a.getContext("2d");
            function o(e, t, i, a, n, r) {
                (this.x0 = e), (this.y0 = t), (this.x1 = a), (this.y1 = n), (this.rad0 = i), (this.rad1 = r), (this.colorStops = []);
            }
            (e = 0.5 * t.width),
                (i = 1.5 * t.height),
                61,
                24,
                49,
                12,
                3,
                33,
                (o.prototype.addColorStop = function (e, t, i, a) {
                    if (!(e < 0 || e > 1)) {
                        var n = { ratio: e, r: t, g: i, b: a };
                        if (e >= 0 && e <= 1)
                            if (0 == this.colorStops.length) this.colorStops.push(n);
                            else {
                                for (var r = 0, s = !1, o = this.colorStops.length; !s && r < o; ) (s = e <= this.colorStops[r].ratio) || r++;
                                s ? (e == this.colorStops[r].ratio ? this.colorStops.splice(r, 1, n) : this.colorStops.splice(r, 0, n)) : this.colorStops.push(n);
                            }
                    }
                }),
                (o.prototype.fillRect = function (e, t, i, a, n) {
                    if (0 != this.colorStops.length) {
                        var r,
                            s,
                            o,
                            l,
                            d,
                            c,
                            u,
                            p,
                            f,
                            h,
                            v,
                            m,
                            g,
                            b,
                            w,
                            y,
                            x,
                            C,
                            S,
                            T,
                            E,
                            M,
                            k,
                            P,
                            $ = e.getImageData(t, i, a, n),
                            z = $.data,
                            L = z.length,
                            O = (this.x1, this.x0, this.y1, this.y0, []),
                            I = [],
                            A = [],
                            D = this.x1 - this.x0,
                            F = this.y1 - this.y0,
                            j = this.rad1 - this.rad0;
                        T = j * j - D * D - F * F;
                        var _ = 2 * this.rad0 * (this.rad1 - this.rad0),
                            N = this.rad0 * this.rad0;
                        if (0 != this.colorStops[0].ratio) {
                            var B = { ratio: 0, r: this.colorStops[0].r, g: this.colorStops[0].g, b: this.colorStops[0].b };
                            this.colorStops.splice(0, 0, B);
                        }
                        if (1 != this.colorStops[this.colorStops.length - 1].ratio) {
                            var B = { ratio: 1, r: this.colorStops[this.colorStops.length - 1].r, g: this.colorStops[this.colorStops.length - 1].g, b: this.colorStops[this.colorStops.length - 1].b };
                            this.colorStops.push(B);
                        }
                        for (var q = 0; q < L / 4; q++) {
                            if (((o = t + (q % a)), (l = i + Math.floor(q / a)), (k = o - this.x0), (P = l - this.y0), (M = (E = _ + 2 * (k * D + P * F)) * E - 4 * T * (N - k * k - P * P)) >= 0)) {
                                if (((d = (-E + Math.sqrt(M)) / (2 * T)) < 0 ? (d = 0) : d > 1 && (d = 1), 1 == d)) x = this.colorStops.length - 1;
                                else for (x = 0, C = !1; !C; ) (C = d < this.colorStops[x].ratio) || x++;
                                (p = this.colorStops[x - 1].r),
                                    (f = this.colorStops[x - 1].g),
                                    (h = this.colorStops[x - 1].b),
                                    (v = this.colorStops[x].r),
                                    (m = this.colorStops[x].g),
                                    (g = this.colorStops[x].b),
                                    (b = this.colorStops[x - 1].ratio),
                                    (w = this.colorStops[x].ratio),
                                    (c = p + (v - p) * (y = (d - b) / (w - b))),
                                    (u = f + (m - f) * y),
                                    (E = h + (g - h) * y);
                            } else (c = p), (u = f), (E = h);
                            O.push(c), I.push(u), A.push(E);
                        }
                        for (var H = 0; H < L / 4; H++)
                            (r = ~~O[H]),
                                (s = O[H] - r),
                                (O[H + 1] += (7 / 16) * s),
                                (O[H - 1 + a] += (3 / 16) * s),
                                (O[H + a] += (5 / 16) * s),
                                (O[H + 1 + a] += (1 / 16) * s),
                                (r = ~~I[H]),
                                (s = I[H] - r),
                                (I[H + 1] += (7 / 16) * s),
                                (I[H - 1 + a] += (3 / 16) * s),
                                (I[H + a] += (5 / 16) * s),
                                (I[H + 1 + a] += (1 / 16) * s),
                                (r = ~~A[H]),
                                (s = A[H] - r),
                                (A[H + 1] += (7 / 16) * s),
                                (A[H - 1 + a] += (3 / 16) * s),
                                (A[H + a] += (5 / 16) * s),
                                (A[H + 1 + a] += (1 / 16) * s);
                        for (var V = 0; V < L; V += 4) (S = V / 4), (z[V] = ~~O[S]), (z[V + 1] = ~~I[S]), (z[V + 2] = ~~A[S]), (z[V + 3] = 255);
                        e.putImageData($, t, i);
                    }
                });
            var l = Math.sqrt(t.width * t.width + t.height * t.height) / 2,
                d = new o(e, i, 0, t.width / 2, t.height / 4, l);
            d.addColorStop(0, 61, 24, 49),
                d.addColorStop(0.6, 12, 3, 33),
                d.fillRect(s, 0, 0, t.width, t.height),
                window.addEventListener("resize", function () {
                    Date.now() - r < n && this.resizeTimeout && (clearTimeout(this.resizeTimeout), delete this.resizeTimeout),
                        (r = Date.now()),
                        (t.style.display = "none"),
                        (this.resizeTimeout = setTimeout(function () {
                            !(function (e, t, i) {
                                (e.style.opacity = 0), (e.style.display = "block");
                                var a = Date.now();
                                !(function n() {
                                    var r = (Date.now() - a) / t;
                                    r > 1 ? ((r = 1), i && i()) : (window.requestAnimationFrame && requestAnimationFrame(n)) || setTimeout(n, 16), (e.style.opacity = r);
                                })();
                            })(t, 500),
                                b();
                        }, 500)),
                        (t.width = window.innerWidth),
                        (t.height = window.innerHeight);
                }),
                setTimeout(b, 0),
            (window.requestAnimationFrame && requestAnimationFrame(x)) || setTimeout(x, w);
        })()
        : e.remove(),
        $(window).on("resize", function () {
            $(window).width() < 1024 && e.remove();
        }),
        this.resizeTimeout;
    var t,
        a,
        n = 500,
        r = Date.now();
    var s = [],
        o = [],
        l = [],
        d = [],
        c = [],
        u = [],
        p = [],
        f = [],
        h = [],
        v = [];
    function m(e) {
        return Math.random() * e;
    }
    function g(e, t) {
        (this.ctx = e.getContext("2d")), (this.size = t), (this.x = m(window.innerWidth)), (this.y = m(window.innerHeight));
    }
    function b() {
        var e = window.innerWidth * window.innerHeight,
            i = 2e-5 * e,
            a = 2e-5 * e,
            n = 5e-5 * e,
            r = 1e-5 * e,
            m = 1e-5 * e,
            b = 1e-5 * e,
            w = 1e-5 * e,
            y = 1e-5 * e,
            x = 4e-6 * e,
            C = 6e-6 * e;
        (s = []), (o = []), (l = []), (d = []), (c = []), (u = []), (p = []), (f = []), (h = []), (v = []);
        for (var S = 0; S < i; S++) s.push(new g(t, 0.5));
        for (S = 0; S < a; S++) o.push(new g(t, 0.5));
        for (S = 0; S < n; S++) l.push(new g(t, 0.5));
        for (S = 0; S < r; S++) d.push(new g(t, 1));
        for (S = 0; S < m; S++) c.push(new g(t, 1));
        for (S = 0; S < b; S++) u.push(new g(t, 1));
        for (S = 0; S < w; S++) p.push(new g(t, 2));
        for (S = 0; S < y; S++) f.push(new g(t, 2));
        for (S = 0; S < x; S++) h.push(new g(t, 2));
        for (S = 0; S < C; S++) v.push(new g(t, 2));
    }
    g.prototype.animate = function (e, t, i, a) {
        (this.x += t * e * Math.random()),
            (this.y += i * e * Math.random()),
        this.y > window.innerHeight && (this.y = 0),
        this.x > window.innerWidth && (this.x = 0),
            (this.ctx.fillStyle = a),
            this.ctx.fillRect(this.x, this.y, this.size, this.size);
    };
    var w = 16,
        y = 0;
    function x(e) {
        t.getContext("2d").clearRect(0, 0, t.width, t.height);
        var i = (window.requestAnimationFrame ? e - y : w) / 5e3;
        i > 0.05 && (i = 0.05),
            (function (e) {
                for (var t = 0; t < s.length; t++) s[t].animate(0.06, -5, -5, "#445a8c");
                for (t = 0; t < o.length; t++) o[t].animate(0.03, 10, 5, "#5b7ac1");
                for (t = 0; t < l.length; t++) l[t].animate(0.03, 0.05, -5, "#ffffff");
                for (t = 0; t < d.length; t++) d[t].animate(0.01, 0.5, 5, "#445a8c");
                for (t = 0; t < c.length; t++) c[t].animate(0.01, 0.5, 5, "#5b7ac1");
                for (t = 0; t < u.length; t++) u[t].animate(0.01, 0.5, 5, "#ffffff");
                for (t = 0; t < p.length; t++) p[t].animate(0.02, -3, 7, "#445a8c");
                for (t = 0; t < f.length; t++) f[t].animate(0.02, -3, 7, "#5b7ac1");
                for (t = 0; t < h.length; t++) h[t].animate(0.02, -3, 7, "#ffffff");
                for (t = 0; t < v.length; t++) v[t].animate(0.08, -3, -7, "#ff0000");
            })(),
        (window.requestAnimationFrame && requestAnimationFrame(x)) || setTimeout(x, w),
            (y = e);
    }
    function C(e, t, i, a, n, r) {
        (this.x0 = e), (this.y0 = t), (this.x1 = a), (this.y1 = n), (this.rad0 = i), (this.rad1 = r), (this.colorStops = []);
    }
    (C.prototype.addColorStop = function (e, t, i, a) {
        if (!(e < 0 || e > 1)) {
            var n = { ratio: e, r: t, g: i, b: a };
            if (e >= 0 && e <= 1)
                if (0 == this.colorStops.length) this.colorStops.push(n);
                else {
                    for (var r = 0, s = !1, o = this.colorStops.length; !s && r < o; ) (s = e <= this.colorStops[r].ratio) || r++;
                    s ? (e == this.colorStops[r].ratio ? this.colorStops.splice(r, 1, n) : this.colorStops.splice(r, 0, n)) : this.colorStops.push(n);
                }
        }
    }),
        (C.prototype.fillRect = function (e, t, a, n, r) {
            if (0 != this.colorStops.length) {
                var s,
                    o,
                    l,
                    d,
                    c,
                    u,
                    p,
                    f,
                    h,
                    v,
                    m,
                    g,
                    b,
                    w,
                    y,
                    x,
                    C,
                    S,
                    T,
                    E,
                    M,
                    k,
                    P,
                    $ = e.getImageData(t, a, n, r),
                    z = $.data,
                    L = z.length,
                    O = (this.x1, this.x0, this.y1, this.y0, []),
                    I = [],
                    A = [],
                    D = this.x1 - this.x0,
                    F = this.y1 - this.y0,
                    j = this.rad1 - this.rad0;
                T = j * j - D * D - F * F;
                var _ = 2 * this.rad0 * (this.rad1 - this.rad0),
                    N = this.rad0 * this.rad0;
                if (0 != this.colorStops[0].ratio) {
                    var B = { ratio: 0, r: this.colorStops[0].r, g: this.colorStops[0].g, b: this.colorStops[0].b };
                    this.colorStops.splice(0, 0, B);
                }
                if (1 != this.colorStops[this.colorStops.length - 1].ratio) {
                    B = { ratio: 1, r: this.colorStops[this.colorStops.length - 1].r, g: this.colorStops[this.colorStops.length - 1].g, b: this.colorStops[this.colorStops.length - 1].b };
                    this.colorStops.push(B);
                }
                for (i = 0; i < L / 4; i++) {
                    if (((l = t + (i % n)), (d = a + Math.floor(i / n)), (M = (E = _ + 2 * ((k = l - this.x0) * D + (P = d - this.y0) * F)) * E - 4 * T * (N - k * k - P * P)) >= 0)) {
                        if (((c = (-E + Math.sqrt(M)) / (2 * T)) < 0 ? (c = 0) : c > 1 && (c = 1), 1 == c)) x = this.colorStops.length - 1;
                        else for (x = 0, C = !1; !C; ) (C = c < this.colorStops[x].ratio) || x++;
                        (f = this.colorStops[x - 1].r),
                            (h = this.colorStops[x - 1].g),
                            (v = this.colorStops[x - 1].b),
                            (m = this.colorStops[x].r),
                            (g = this.colorStops[x].g),
                            (b = this.colorStops[x].b),
                            (u = f + (m - f) * (y = (c - (w = this.colorStops[x - 1].ratio)) / (this.colorStops[x].ratio - w))),
                            (p = h + (g - h) * y),
                            (E = v + (b - v) * y);
                    } else (u = f), (p = h), (E = v);
                    O.push(u), I.push(p), A.push(E);
                }
                for (i = 0; i < L / 4; i++)
                    (s = ~~O[i]),
                        (o = O[i] - s),
                        (O[i + 1] += (7 / 16) * o),
                        (O[i - 1 + n] += (3 / 16) * o),
                        (O[i + n] += (5 / 16) * o),
                        (O[i + 1 + n] += (1 / 16) * o),
                        (s = ~~I[i]),
                        (o = I[i] - s),
                        (I[i + 1] += (7 / 16) * o),
                        (I[i - 1 + n] += (3 / 16) * o),
                        (I[i + n] += (5 / 16) * o),
                        (I[i + 1 + n] += (1 / 16) * o),
                        (s = ~~A[i]),
                        (o = A[i] - s),
                        (A[i + 1] += (7 / 16) * o),
                        (A[i - 1 + n] += (3 / 16) * o),
                        (A[i + n] += (5 / 16) * o),
                        (A[i + 1 + n] += (1 / 16) * o);
                for (i = 0; i < L; i += 4) (S = i / 4), (z[i] = ~~O[S]), (z[i + 1] = ~~I[S]), (z[i + 2] = ~~A[S]), (z[i + 3] = 255);
                e.putImageData($, t, a);
            }
        });
}, false);