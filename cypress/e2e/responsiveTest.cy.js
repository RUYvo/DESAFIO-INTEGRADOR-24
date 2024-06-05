describe('Design Responsivo', () => {
    const viewports = [
      { width: 320, height: 480 }, // Simula um dispositivo móvel pequeno
      { width: 375, height: 667 }, // Simula um iPhone X
      { width: 768, height: 1024 }, // Simula um iPad
      { width: 1024, height: 1366 }, // Simula um laptop
      { width: 1920, height: 1080 } // Simula um monitor de desktop grande
    ];
  
    viewports.forEach(({ width, height }) => {
      it(`deve ser responsivo em um dispositivo com resolução ${width}x${height}`, () => {
        cy.viewport(width, height);
        cy.visit('https://clima-tempo-di-camporeal.vercel.app/');
      });
    });
  });
  