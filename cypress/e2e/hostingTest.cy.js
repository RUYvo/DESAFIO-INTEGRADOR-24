describe('Dashboard de Clima', () => {
    beforeEach(() => {
      cy.visit('https://clima-tempo-di-camporeal.vercel.app/');
    });
  
    it('deve carregar a página inicial do dashboard', () => {
      cy.contains('Clima Now').should('be.visible');
    });
  });
  