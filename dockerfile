# Usa a imagem oficial do Nginx como base
# Esta imagem contém o servidor Nginx pré-configurado e pronto para uso
FROM nginx:latest

# Define rótulos para documentar informações sobre a imagem
LABEL maintainer="alexrabelo@gmail.com"
LABEL version="1.1"
LABEL description="Imagem personalizada do Nginx para o projeto Toshiro Shibakita"

# Copia o arquivo de configuração personalizado (nginx.conf)
# para o diretório de configuração do Nginx dentro do container
COPY nginx.conf /etc/nginx/nginx.conf

# Cria um diretório para armazenar logs personalizados do Nginx
RUN mkdir -p /var/log/nginx/custom_logs

# Define permissões para o diretório de logs
RUN chmod -R 755 /var/log/nginx/custom_logs

# Expõe a porta configurada no nginx.conf (4500)
EXPOSE 4500

# Comando de inicialização padrão do container
# O Nginx será iniciado automaticamente quando o container for executado
CMD ["nginx", "-g", "daemon off;"]