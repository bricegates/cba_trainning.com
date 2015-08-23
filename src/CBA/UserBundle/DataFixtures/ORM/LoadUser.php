<?php
namespace CBA\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CBA\UserBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
class LoadUser implements FixtureInterface {

    public function load(ObjectManager $manager) {
        // Les noms d'utilisateurs à créer
        $listNames = array('alexandre', 'marine', 'anna','brice');
$encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        foreach ($listNames as $name) {
            // On crée l'utilisateur
            $user = new User;

            // Le nom d'utilisateur et le mot de passe sont identiques
            $user->setUsername($name);
            $user->setFirstname(ucfirst($name));
            $user->setLastname(ucfirst($name));
             $user->setEmail("$name@test.fr");

   $password = $encoder->encodePassword($name, $user->getSalt());
   $user->setPassword($password);
            // On définit uniquement le role ROLE_USER qui est le role de base
            $user->setRoles(array('ROLE_ADMIN'));

            // On le persiste
            $manager->persist($user);
        }

        // On déclenche l'enregistrement
        $manager->flush();
    }

}