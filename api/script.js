// Verifica se o código está sendo executado no servidor
if (typeof window === 'undefined') {
    // Exporta a função como um módulo CommonJS para o Node.js
    module.exports = function handler(req, res) {
        if (req.method === 'GET') {
            res.status(200).json({ message: 'Deu certo!' });
        } else {
            res.status(405).json({ message: 'Erro ao obter a API' });
        }
    }
}
