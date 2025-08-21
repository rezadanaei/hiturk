const elements = {
    name: "DanaeiCMS",
    version: "1.0.0",
    author: "Danaei Company",
    description: "Default theme for DanaeiCMS",
    elements: {
        header: {
            type: "container",
            components: [
                {
                    type: "logo",
                    src: "/themes/default/assets/logo.png",
                    alt: "DanaeiCMS Logo",
                    action: "goHome",
                },
                {
                    type: "nav",
                    items: [
                        { label: "Home", link: "/" },
                        { label: "About", link: "/about" },
                        { label: "Contact", link: "/contact" },
                    ],
                },
            ],
        },
        main: {
            type: "container",
            components: [
                {
                    type: "content",
                    source: "pageContent",
                },
            ],
        },
        footer: {
            type: "container",
            components: [
                {
                    type: "text",
                    value: "© 2025 DanaeiCMS. All rights reserved.",
                },
            ],
        },
    },
    styles: {
        primaryColor: "#3A8DFF",
        fontFamily: "'Vazir', sans-serif",
        fontSize: "16px",
    },
    scripts: {
        onLoad: "initDefaultTheme()",
    },
};
