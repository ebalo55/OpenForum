# Installation

### How to install and run OpenForum

OpenForum installation is as easy as running the following command from the project folder:

<pre class="language-bash"><code class="lang-bash"><strong>docker build \
</strong><strong>       -t open-forum \
</strong>       --build-arg WEB_USER_PSW="&#x3C;enter a psw for the default user>" \
       --build-arg DB_HOST="127.0.0.1" \
       .

# add the next line to the run command if you want to migrate or update the DB:
# -e RUN_MIGRATION="true"
<strong>docker run \
</strong>       -e RUN_QUEUE="true" \
       -e RUN_SCHEDULER="true" \
       -e RUN_WEBSERVICE="true" \
       -e DB_DATABASE="&#x3C;database-name>" \
       -e DB_USERNAME="&#x3C;database-username>" \
       -e DB_PASSWORD="&#x3C;database-password>" \
       open-forum
</code></pre>
