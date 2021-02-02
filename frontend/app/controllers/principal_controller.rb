require 'httparty'
class PrincipalController < ApplicationController
  include HTTParty
  
  def index
    @datos = HTTParty.get "http://localhost:8000/api/laborsocial"
  end
end
