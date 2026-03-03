function app() {
    return {
        data: null,
        faq: null,
        team: null,
        consult: null,
        product: null,

        async fetchData() {
            try {
                // We assume the JSON structure is response.data['en']
                const lang = 'en';

                // Fetching parallel data to improve load speed
                const [welcomeRes, productRes] = await Promise.all([
                    axios.get('/data/welcome.json'),
                    axios.get('/data/product.json')
                ]);

                this.data = welcomeRes.data[lang];
                this.product = productRes.data[lang];

                // Route-specific fetches
                const path = window.location.pathname;

                if (path === '/faq') {
                    const res = await axios.get('/data/faq.json');
                    this.faq = res.data[lang];
                }

                if (path === '/team') {
                    const res = await axios.get('/data/team.json');
                    this.team = res.data[lang];
                }

                if (path === '/consulting') {
                    const res = await axios.get('/data/consulting.json');
                    this.consult = res.data[lang];
                }

            } catch (error) {
                console.error('Error loading English data:', error);
            }
        },

        init() {
            this.fetchData();
        }
    }
}
