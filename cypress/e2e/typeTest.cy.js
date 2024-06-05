describe('Teste de busca de cidade', () => {
  it('Deve buscar o clima de uma cidade', () => {
    cy.visit('https://clima-tempo-di-camporeal.vercel.app/');

    const cidade = 'São Paulo, SP'; 
    
    cy.get('#cityInput') 
      .type(cidade) 
      .should('have.value', cidade); 

    cy.get('#searchButton') 
      .click();

    cy.get('#city').should('have.text', cidade);
    cy.get('#temp').should('not.have.text', '--');
    cy.get('#description').should('not.have.text', '--');
  });
});
