var request = require('request');

const qrcode = require('qrcode-terminal');

const { Client, LocalAuth } = require('whatsapp-web.js');

const client = new Client({
    authStrategy: new LocalAuth()
});

palavras = ['Tela','Display','bateria','carcaça','carcasa','do','4g','5g','?', '!', '.', ',', 'dock','doc'];

client.on('ready', () => {
    console.log('Client is ready!');
});

client.on('qr', qr => {
    qrcode.generate(qr, { small: true });
});
client.on('message', message => {

    // reply back "pong" directly to the message
    console.log(message.author+'Mensagem recebida: ' + message.body);
    // remover caracteris especiais mensagem.body
    message.body = message.body.replace(/[^a-zA-Z0-9]/g, '');
    // remover palavras
    palavras.forEach(palavra => {
        message.body = message.body.replace(palavra, '');
    });
    
    request('http://localhost/botwtz1.1/src/api_consulta.php?produto=' + message.body, function (error, response, body) {
 
        if (body.includes('\n\nNenhum produto encontrado')) {
            console.log('Nenhum produto encontrado');
        } else {
            console.log('Produto encontrado');
            message.reply(body.trim());
        }
    }
    );
});


client.initialize();
