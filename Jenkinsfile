pipeline {
    agent any
    stages {
        stage('Clone repository') {
            steps {
                git branch: 'dev', url: 'https://github.com/kichukowa/WEB.git'
            }
        }

        stage('Delete the old image and container') {
            steps {
                sh "#sudo docker container stop my-project"
                sh "#sudo docker container rm my-project"
                sh "#sudo docker image rm my-project"
            }
        }

        stage('Create the image and run the container') {
            steps {
                sh "sudo docker build -t my-project ."
                sh "docker run --name my-project -p 90:90 my-project"
            }
        }
}
}
