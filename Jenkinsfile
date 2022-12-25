pipeline {
    stages {
        stage('Clone repository') {
            steps {
                git branch: 'dev', url: 'https://github.com/kichukowa/WEB.git'
            }
        }

        stage('Delete the old image and container') {
            steps {
                sh "docker container stop my-project"
                sh "docker container rm my-project"
                sh "docker image rm my-project"
            }
        }

        stage('Create the image and run the container') {
            steps {
                sh "docker build -t my-project ."
                sh "docker run -p 80:80 my-project"
            }
        }
}
}
