describe('Testes de Interface do Usuário', () => {
  it('Deve carregar corretamente todos os elementos visíveis', () => {
    cy.visit('https://clima-tempo-di-camporeal.vercel.app/');

    cy.get('body').should('exist');
    cy.get('.container').should('exist');
    cy.get('.card').should('exist');
  });

  it('deve renderizar gráficos', () => {
      const cidade = 'Rio de Janeiro, RJ'; 
  
      cy.visit('https://clima-tempo-di-camporeal.vercel.app/');
  
      cy.get('#cityInput') 
        .type(cidade) 
        .should('have.value', cidade); 
  
      cy.get('#searchButton') 
        .click();

      cy.get('#weatherPieChart').should('be.visible');
      cy.get('#rainBarChart').should('be.visible');
    }
  )
});
